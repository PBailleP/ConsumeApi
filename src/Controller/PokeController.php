<?php

namespace App\Controller;

use App\Form\FindPokeType;
use App\Service\ApiCallService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\DecodingExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;

class PokeController extends AbstractController
{

    private array $errors = [];

    /**
     * @return array
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * @param array $errors
     */
    public function setErrors(array $errors): void
    {
        $this->errors = $errors;
    }

    /**
     * @throws TransportExceptionInterface
     * @throws ServerExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws DecodingExceptionInterface
     * @throws ClientExceptionInterface
     */
    #[Route('/poke', name: 'app_poke')]
    public function index(Request $request, ApiCallService $apiCallService): Response
    {
        $callResult = [];
        $imageResult = "";
        $form = $this->createForm(FindPokeType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $pokemon = $form->getData()['pokemon'];
            $callResult = $apiCallService->callPokeApi($pokemon);
            if (false !== $callResult) {
                if (strlen($callResult['id']) < 3) {
                    $imageId = '0' . $callResult['id'];
                } else {
                    $imageId = $callResult['id'];
                }
                $imageResult = 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/' . $imageId . '.png';
            } else {
                $this->errors[] = 'Pas de pokemon trouvé';
            }
        }
            return $this->render('poke/index.html.twig', [
            'form' => $form->createView(),
            'callResult' => $callResult,
            'imageResult' => $imageResult,
            'errors' => $this->getErrors(),
        ]);
    }

}
