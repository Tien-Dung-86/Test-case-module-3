<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = new Book();
        $book->name = "Chí Phèo";
        $book->price = '82000';
        $book->description = 'Khái quát một hiện tượng xã hội ở nông thôn Việt Nam trước năm 1945, một bộ phận nông dân lao động lương thiện bị đẩy vào con đường tha hóa, lưu manh hóa. Nhà văn đã kết án đanh thép cái xã hội tàn bạo tàn phá cả thể xác và tâm hồn người nông dân lao động, đồng thời khẳng định bản chất lương thiện của họ, ngay trong khi họ bị vùi dập mất cả nhân hình, nhân tính. Chí Phèo là một tác phẩm có giá trị hiện thực và giá trị nhân đạo sâu sắc, mới mẻ.';
    }
}
