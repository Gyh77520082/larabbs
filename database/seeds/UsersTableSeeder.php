<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
    {
        // 生成数据集合
        $users = factory(User::class)->times(10)->create();

        // 单独处理第一个用户的数据
        $user = User::find(1);
        $user->name = 'GYH';
        $user->email = '77520082@qq.com';
        $user->password = '$2y$10$vla/efE/EbVMPVUN.x3Lcu6a1POrP0fFGRfzHF979bQ3fnKKSndKi'; //asd98455642
        $user->avatar = 'https://cdn.learnku.com/uploads/images/201710/14/1/ZqM7iaP4CR.png';
        $user->save();
    }
}
