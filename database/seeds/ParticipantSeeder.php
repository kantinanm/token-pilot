<?php

use Illuminate\Database\Seeder;
use App\Participant;
use Dirape\Token\Token;
class ParticipantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $participant = [

            [
                'fullname' => 'นายอิทธิพล ตรีกุย',
                'email' => 'Itztri@outlook.com',
                'garena_id' => '',
                'gender' => 'Male',
                'age' => '17',
                'unique_id' => (new Token())->Unique('participant', 'unique_id', 40)
            ]
            ,
            [
                'fullname' => 'จักรวาล นามะเสน',
                'email' => 'jakkrawan_1@hotmail.com',
                'garena_id' => '',
                'gender' => 'Male',
                'age' => '15',
                'unique_id' => (new Token())->Unique('participant', 'unique_id', 40)
            ]
            ,
            [
                'fullname' => 'นนทวรรธ นิลนาค',
                'email' => 'uyhugyh@gmail.com',
                'garena_id' => '',
                'gender' => 'Male',
                'age' => '18',
                'unique_id' => (new Token())->Unique('participant', 'unique_id', 40)
            ]
            ,
            [
                'fullname' => 'กิติภพ เฉลิมวงษ์',
                'email' => '25165@ud.ac.th',
                'garena_id' => '',
                'gender' => 'Male',
                'age' => '19',
                'unique_id' => (new Token())->Unique('participant', 'unique_id', 40)
            ]
            ,
            [
                'fullname' => 'อนุพล รักษาคม',
                'email' => 'nongsangzatv@gmail.com',
                'garena_id' => '',
                'gender' => 'Male',
                'age' => '19',
                'unique_id' => (new Token())->Unique('participant', 'unique_id', 40)
            ]
        ];

        foreach ($participant as $key => $value) {
            Participant::create($value);
        }
    }
}
