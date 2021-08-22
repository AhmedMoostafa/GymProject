<?php


namespace database\seeds;
use App\UserInfo;
use Illuminate\Database\Seeder;
class UserInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\UserInfo::class, 5)->create();
    }
}
