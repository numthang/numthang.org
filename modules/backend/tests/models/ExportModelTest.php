<?php

use Backend\Models\ExportModel;

if (!class_exists('Model')) {
    class_alias('October\Rain\Database\Model', 'Model');
}

class ExportModelTest extends TestCase
{
    public function testEncodeArrayValue()
    {
        $model = new ExampleExportModel;
        $data = ['foo', 'bar'];
        $result = self::callProtectedMethod($model, 'encodeArrayValue', [$data]);
        $this->assertEquals('foo|bar', $result);

        $data = ['dps | heals | tank', 'paladin', 'berserker', 'gunner'];
        $result = self::callProtectedMethod($model, 'encodeArrayValue', [$data]);
        $this->assertEquals('dps \| heals \| tank|paladin|berserker|gunner', $result);

        $data = ['art direction', 'roman empire', 'sci-fi'];
        $result = self::callProtectedMethod($model, 'encodeArrayValue', [$data, '-']);
        $this->assertEquals('art direction-roman empire-sci\-fi', $result);
    }

    public function testDownloadCsv()
    {
        $model = new ExampleExportModel;

        $csvName = $model->export(
            ['foo' => 'title', 'bar' => 'title2'],
            ['file_format' => 'csv']
        );

        $response = $model->download($csvName);

        $request = new Illuminate\Http\Request();

        $response->prepare($request);

        $this->assertTrue($response->headers->has('Content-Type'), "Response is missing the Content-Type header!");
        $this->assertTrue(
            $response->headers->contains('Content-Type', 'text/csv; charset=UTF-8'),
            "Content-Type should be either text/csv. Found: " . $response->headers->get('Content-Type')
        );

        ob_start();
        $response->send();
        $output = ob_get_clean();

        $utf8BOM = chr(239).chr(187).chr(191);

        $this->assertEquals($utf8BOM."title,title2\nbar,foo\nbar2,foo2\n", $output, "CSV is not right!");

        $filePath = temp_path($csvName);

        $fileGotDeleted = !is_file($filePath);

        $this->assertTrue($fileGotDeleted, "Export-CSV doesn't get deleted.");
        if (!$fileGotDeleted) {
            unlink($filePath);
        }
    }
}

class ExampleExportModel extends ExportModel
{
    public function exportData($columns, $sessionKey = null)
    {
        return [
            [
                'foo' => 'bar',
                'bar' => 'foo',
                'foobar' => 'Hello World!',
            ],
            [
                'foo' => 'bar2',
                'bar' => 'foo2',
                'foobar' => 'Hello World2!',
            ],
        ];
    }
}
