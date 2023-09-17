<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title' => 'Judul Artikel Pertama',
            'category_id' => 1,
            'user_id' => 1,
            'slug' => 'judul-artikel-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex maxime iure numquam deserunt molestias repudiandae nostrum tempore vel, architecto exercitationem.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex maxime iure numquam deserunt molestias repudiandae nostrum tempore vel, architecto exercitationem dolore reiciendis quos pariatur voluptatum incidunt et neque dolorum qui sunt fugit alias nam earum sed odit. Eaque modi, voluptatibus quos nesciunt rerum iste? Facilis dignissimos et, ratione libero neque est laudantium, distinctio optio vero porro dolore nihil illo non dolorum cupiditate dolorem architecto a mollitia quae consequuntur maiores ipsum explicabo voluptate. Animi non ratione enim laboriosam! Eum maxime soluta architecto nemo natus. Illo, nulla commodi quo vero voluptatum veniam ex eos, saepe consequuntur voluptates autem a modi accusantium necessitatibus ad. Esse tempore eaque ducimus, ad amet quis perferendis, sunt optio fugiat necessitatibus corporis doloribus quisquam at commodi velit eos quaerat quas? Cum dolorum, dolor necessitatibus accusamus, quos ipsum corrupti culpa ullam placeat non magnam iusto in vero tenetur nesciunt voluptate voluptatem. Aliquam natus doloribus incidunt maiores. Accusantium maxime aspernatur obcaecati dolorum, magnam aperiam pariatur, voluptatibus molestiae deserunt repellat eaque beatae voluptatum qui veniam ipsa eveniet. Quaerat, placeat, soluta libero deserunt minima fugit saepe facere eveniet tempore eius consequatur ex quasi veritatis odio sapiente quis voluptatem perferendis iusto iste quas neque incidunt fuga. Cumque dignissimos, quia deleniti accusamus adipisci modi.</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum, nostrum ab culpa beatae reprehenderit voluptas nisi. Sequi, quos? Iste voluptatibus distinctio esse ratione nesciunt fugiat temporibus, ipsa dolorum numquam earum. Cum, sed ea quia doloremque maiores sequi possimus odio consequuntur recusandae veniam aliquid? Molestiae incidunt explicabo, cupiditate enim iusto accusamus quaerat, aliquid at animi eos quidem exercitationem doloribus reiciendis recusandae laudantium totam, nam eius aspernatur unde error voluptatibus! Sed dolorem iure vitae necessitatibus eveniet provident veniam autem magnam velit aliquam saepe nisi reprehenderit esse pariatur veritatis perspiciatis odio nulla neque, sunt iste alias! Quisquam, laudantium consequatur doloremque non odio provident?</p>'
        ]);

        Post::create([
            'title' => 'Judul Artikel Kedua',
            'category_id' => 1,
            'user_id' => 1,
            'slug' => 'judul-artikel-kedua',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore molestias maxime, animi, quis id veritatis ex sapiente delectus aut possimus ad sequi repudiandae voluptatibus magni.',
            'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore molestias maxime, animi, quis id veritatis ex sapiente delectus aut possimus ad sequi repudiandae voluptatibus magni. Expedita, omnis totam vel cum labore natus. Ad fugit fugiat perspiciatis ipsam eveniet. Modi, voluptas quos. Facere fugiat mollitia est veniam ex laborum amet voluptas dolorem, ratione minus odio excepturi nihil vel saepe? Itaque reprehenderit quis deleniti error nesciunt non iusto cumque nam perferendis architecto debitis velit, repellat quia ipsam blanditiis voluptatibus laboriosam saepe perspiciatis veniam sunt. Voluptas, dolorem in corporis culpa iste excepturi, quas neque, incidunt recusandae nemo ullam! Dicta adipisci facilis quisquam dolorem asperiores quia soluta ut minus aliquam nulla voluptates praesentium sit cupiditate assumenda dolores itaque quidem quam, dolor fuga, eos eaque. Animi odit officia repellendus, sit placeat molestiae! Quo provident incidunt illum voluptatum illo, ut voluptate amet sint non ipsa recusandae, natus rem laudantium vel explicabo nobis quaerat nesciunt neque. Nemo.</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium, harum quos! Facilis sunt doloribus cupiditate non mollitia dicta sed error porro soluta repellat odio veritatis ut, nisi consectetur ea recusandae quasi! Sed, quis suscipit accusantium possimus cumque eum nam ut nostrum? Laborum nemo dicta officiis nihil sed repellat obcaecati, officia alias libero dolorem at non? Rem tempora, laborum excepturi esse tenetur eum perspiciatis quasi reprehenderit iusto dolorum minus facilis explicabo, quod temporibus suscipit, cumque beatae odio quam praesentium. Reprehenderit tempora numquam hic laudantium quasi deserunt eius obcaecati non natus rem! Ratione, neque assumenda quis fugit delectus molestiae, tempore cum numquam labore eius vel dicta optio accusantium amet? Tempora rem quidem quos dolorum cum accusantium beatae nobis doloribus, eveniet modi perferendis rerum ea libero architecto vitae ipsa. Illum magni optio modi nostrum, animi fugit illo obcaecati a excepturi. Voluptatum autem eius quidem. Labore explicabo, deserunt repellat iusto eum possimus nihil temporibus!</p>'
        ]);

        Post::create([
            'title' => 'Judul Artikel Ketiga',
            'category_id' => 2,
            'user_id' => 1,
            'slug' => 'judul-artikel-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex maxime iure numquam deserunt molestias repudiandae nostrum tempore vel, architecto exercitationem.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex maxime iure numquam deserunt molestias repudiandae nostrum tempore vel, architecto exercitationem dolore reiciendis quos pariatur voluptatum incidunt et neque dolorum qui sunt fugit alias nam earum sed odit. Eaque modi, voluptatibus quos nesciunt rerum iste? Facilis dignissimos et, ratione libero neque est laudantium, distinctio optio vero porro dolore nihil illo non dolorum cupiditate dolorem architecto a mollitia quae consequuntur maiores ipsum explicabo voluptate. Animi non ratione enim laboriosam! Eum maxime soluta architecto nemo natus. Illo, nulla commodi quo vero voluptatum veniam ex eos, saepe consequuntur voluptates autem a modi accusantium necessitatibus ad. Esse tempore eaque ducimus, ad amet quis perferendis, sunt optio fugiat necessitatibus corporis doloribus quisquam at commodi velit eos quaerat quas? Cum dolorum, dolor necessitatibus accusamus, quos ipsum corrupti culpa ullam placeat non magnam iusto in vero tenetur nesciunt voluptate voluptatem. Aliquam natus doloribus incidunt maiores. Accusantium maxime aspernatur obcaecati dolorum, magnam aperiam pariatur, voluptatibus molestiae deserunt repellat eaque beatae voluptatum qui veniam ipsa eveniet. Quaerat, placeat, soluta libero deserunt minima fugit saepe facere eveniet tempore eius consequatur ex quasi veritatis odio sapiente quis voluptatem perferendis iusto iste quas neque incidunt fuga. Cumque dignissimos, quia deleniti accusamus adipisci modi.</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum, nostrum ab culpa beatae reprehenderit voluptas nisi. Sequi, quos? Iste voluptatibus distinctio esse ratione nesciunt fugiat temporibus, ipsa dolorum numquam earum. Cum, sed ea quia doloremque maiores sequi possimus odio consequuntur recusandae veniam aliquid? Molestiae incidunt explicabo, cupiditate enim iusto accusamus quaerat, aliquid at animi eos quidem exercitationem doloribus reiciendis recusandae laudantium totam, nam eius aspernatur unde error voluptatibus! Sed dolorem iure vitae necessitatibus eveniet provident veniam autem magnam velit aliquam saepe nisi reprehenderit esse pariatur veritatis perspiciatis odio nulla neque, sunt iste alias! Quisquam, laudantium consequatur doloremque non odio provident?</p>'
        ]);

        Post::create([
            'title' => 'Judul Artikel Keempat',
            'category_id' => 3,
            'user_id' => 2,
            'slug' => 'judul-artikel-keempat',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio ad rem labore doloribus, neque provident pariatur tenetur esse veritatis aut dolorem libero.',
            'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio ad rem labore doloribus, neque provident pariatur tenetur esse veritatis aut dolorem libero, repudiandae eligendi fugit optio aspernatur rerum dolore accusamus, modi dolor! Quam, nulla sunt dicta architecto omnis, quas, animi deleniti reiciendis aspernatur dolore perferendis et consequuntur officia. Repellat doloribus numquam soluta commodi non eligendi sed, exercitationem suscipit ab fuga enim, est hic reiciendis eaque! Dolore odio omnis ducimus eos, non itaque! Natus beatae dolores illum delectus magni qui voluptatum a, nulla vero consectetur. Culpa deserunt quae aliquid magni fugit pariatur dolorum debitis fugiat omnis porro neque consequuntur, dolore id?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel rerum eligendi dolore modi maiores. Ea molestias dignissimos dolores repudiandae possimus? Et itaque veniam odio fuga possimus id eos laudantium, nihil cum repudiandae illo sequi. Itaque id iure illo libero iste consequuntur doloremque nihil qui numquam voluptatum nam esse provident voluptatibus consequatur sed accusantium, laboriosam eaque voluptate sint harum debitis! Voluptatem, necessitatibus nam cum praesentium eius, error exercitationem laudantium alias hic repudiandae temporibus, architecto quis quia sapiente eligendi deserunt ullam accusamus corrupti porro repellat aliquid. Maiores, suscipit! Aspernatur commodi laboriosam hic quia tempore deleniti sequi quasi explicabo neque minima! Commodi, hic!</p>'
        ]);

        Post::create([
            'title' => 'Judul Artikel Kelima',
            'category_id' => 3,
            'user_id' => 2,
            'slug' => 'judul-artikel-kelima',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro atque officiis, delectus itaque repellat perferendis. Nulla velit cumque repellat in quo nesciunt et qui eveniet.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro atque officiis, delectus itaque repellat perferendis. Nulla velit cumque repellat in quo nesciunt et qui eveniet, impedit earum tempora vel officia animi? Similique libero totam assumenda, natus ratione hic porro. Quisquam reiciendis blanditiis officiis nobis eveniet mollitia ipsam incidunt natus! Quibusdam voluptatem maiores voluptatum, molestias error maxime eum, est corrupti earum dolorem vitae sit neque cum quidem. Ducimus adipisci ullam dolores inventore sit, tempora nulla commodi quod nam repellendus consequatur suscipit, illo optio. Porro culpa quis dolorem maxime incidunt? Mollitia quo quam consequuntur possimus, harum, aliquam non perferendis qui praesentium voluptas omnis, esse neque tempora magnam veritatis repudiandae id nemo veniam? Enim assumenda perspiciatis quasi. Error ratione quam tempora debitis, dolores dolore libero labore odit, vero eveniet explicabo iure dolorem alias praesentium tenetur delectus dolorum culpa veritatis nobis voluptate placeat magni cum officia. Consequatur vero aperiam sapiente cum aspernatur error nostrum!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem repudiandae magnam repellat perspiciatis recusandae? Dolor porro fugit exercitationem a saepe tempora at quasi perferendis, voluptates vero dolorem cum minus commodi est doloribus maiores cupiditate possimus sequi expedita velit sint! Esse accusamus doloremque quisquam labore explicabo qui suscipit eos nihil illo.</p>'
        ]);
    }
}
