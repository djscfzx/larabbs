<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedCategoriesData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $categories = [
            [
                'name'        => '分享',
                'description' => '人人为我，我为人人',
            ],
            [
                'name'        => '技巧',
                'description' => '开发心得，推荐扩展',
            ],
            [
                'name'        => '问答',
                'description' => '保持友善，不吹不黑',
            ],
            [
                'name'        => '公告',
                'description' => '公示信息发布',
            ],
        ];

        DB::table('categories')->insert($categories);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('categories')->truncate();
    }
}
