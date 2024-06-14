<?php
use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{
    public function testIndex()
    {
        $output = $this->getActualOutputForIndex();
        $this->assertEquals('Hello, World!', $output);
    }

    private function getActualOutputForIndex()
    {
        ob_start();
        include dirname(__DIR__) . '/index.php';
        return ob_get_clean();
    }
}

