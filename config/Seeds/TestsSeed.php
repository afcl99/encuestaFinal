<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Tests seed.
 */
class TestsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [];

        $table = $this->table('tests');
        $data[] = [
            "name"=>"ASQ",
            "description"=>"After-Scenario Questionnaire(3questions)",
            "created"=>date("Y-m-d H:i:s"),
            "modified"=>date("Y-m-d H:i:s")];

        $data[] = [
            "name"=>"NASA-TLX",
            "description"=>"NASA´s task load index(5 questions)",
            "created"=>date("Y-m-d H:i:s"),
            "modified"=>date("Y-m-d H:i:s")];

        $data[] = [
            "name"=>"SMEQ",
            "description"=>"subjective Mental Effort Questionnaire(1 question)",
            "created"=>date("Y-m-d H:i:s"),
            "modified"=>date("Y-m-d H:i:s")];

        $data[] = [
            "name"=>"UME",
            "description"=>"Usability Magnitude Estimation(1 question)",
            "created"=>date("Y-m-d H:i:s"),
            "modified"=>date("Y-m-d H:i:s")];

        $data[] = [
            "name"=>"SEQ",
            "description"=>"Single Ease Question(1 question)",
            "created"=>date("Y-m-d H:i:s"),
            "modified"=>date("Y-m-d H:i:s")];
        $table->insert($data)->save();
    }
}
