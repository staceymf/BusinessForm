<?php

namespace TestApplication\TestController;

use QL\Panthor\ControllerInterface;
use src\ContentEngine\LayoutRendererInterface;
use Slim\Http\Response;

class TestController implements ControllerInterface
{
    const CONTENT = 'content.twig';
    /**
     * @var Response
     */
    private $response;

    /**
     * @var LayoutRendererInterface
     */
    private $layoutRenderer;

    public function __construct(Response $response)
    {
        $this->response = $response;
    }

    public function __invoke()
    {
        $this->response->setBody(self::CONTENT);
        return $this->layoutRenderer->render($this->response, self::CONTENT);
    }
}