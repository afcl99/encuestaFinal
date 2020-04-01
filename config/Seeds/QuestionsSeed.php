<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Questions seed.
 */
class QuestionsSeed extends AbstractSeed
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
        $table = $this->table('questions');
        $data[] = [
            "test_id"=>"1",
            "description"=>"Overall, I am satisfied with the ease of completing the tasks in this scenario",
            "created"=>date("Y-m-d H:i:s"),
            "modified"=>date("Y-m-d H:i:s")];
        $data[] = [
            "test_id"=>"1",
            "description"=>"Overall, I am satisfied with the amount of time it took to complete the tasks in this scenario ",
            "created"=>date("Y-m-d H:i:s"),
            "modified"=>date("Y-m-d H:i:s")];
        $data[] = [
            "test_id"=>"1",
            "description"=>"Overall, I am satisfied with the support information (online-line help, messages, documentation) when completing the tasks ",
            "created"=>date("Y-m-d H:i:s"),
            "modified"=>date("Y-m-d H:i:s")];
        $table->insert($data)->save();
    }
}
