<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'title'=>'Soto Ayam Santan Susu',
            'category_id'=>4,
            'thumb'=>'/thumbnail/sotoayam.jpg',
            'user_id'=>1,
            'content'=>'<h1 style="text-align:center"><span style="font-family:Arial,Helvetica,sans-serif"><strong>Resep Soto Ayam Santan Susu</strong></span></h1>

            <p><strong>Bahan-bahan:</strong></p>
            
            <ul>
                <li>300 gr ayam rebus suwir</li>
                <li>5 siung bawang merah</li>
                <li>3 siung bawang putih</li>
                <li>1 cm jahe</li>
                <li>2 lembar&nbsp;daun salam</li>
                <li>2 ruas sereh</li>
                <li>1 ruas jahe</li>
                <li>700 ml Frisian Flag Purefarm Full Cream</li>
                <li>250 ml kaldu ayam/sapi</li>
                <li>&frac12; sdt merica</li>
                <li>3 butir cengkeh</li>
                <li>1 sdt ketumbar bubuk</li>
                <li>2 sdm gula pasir</li>
                <li>1 sdm minyak goreng</li>
                <li>Garam dan merica secukupnya</li>
                <li>Daun bawang dan bawang goreng (topping)</li>
            </ul>
            
            <p>&nbsp;</p>
            
            <p><strong>Cara membuat resep soto ayam santan susu:</strong></p>
            
            <ol>
                <li>Untuk membuat resep soto ayam santan kuah susu, pertama siapkan bawang merah 5 siung, bawang putih 3 siung, jahe 1 cm lalu haluskan</li>
                <li>Panaskan minyak, masukkan bumbu yang sudah dihaluskan, serai dan daun salam 2 lembar, ketumbar 1 sdt, cengkeh 3 butir, tambahkan kaldu ayam 250ml, Frisian Flag Purefarm Full Cream 700ml, garam sesuai selera, merica 1/2 sdt, gula 2 sdt.</li>
                <li>Di tempat terpisah, goreng ayam hingga matang. Setelah matang, suwir-suwir dagingnya</li>
                <li>Masukkan ayam suwir 300gr lalu aduk sampai bumbu-bumbunya meresap dan resep pengganti soto ayam santan ini siap dihidangkan dengan menambahkan daun bawang &amp; bawang goreng di atasnya.</li>
            </ol>
            
            <p><span style="font-family:Arial, Helvetica, sans-serif"><span style="font-size:22px"><strong>Selamat Mencoba :)</strong></span></span></p>
            '
        ]);

        Post::create([
            'title'=>'Apa itu Coding?',
            'category_id'=>1,
            'thumb'=>'/thumbnail/apa-itu-coding.png',
            'user_id'=>1,
            'content'=>'<h1 style="text-align:center"><span style="font-size:28px"><span style="font-family:Arial,Helvetica,sans-serif"><strong>Apa itu Coding?</strong></span></span></h1>

            <p><em>Coding</em>&nbsp;adalah salah satu tindakan dari langkah-langkah pemrograman dengan menuliskan kode atau skrip dalam bahasa pemrograman. Supaya skrip tersebut dapat dipahami oleh komputer, maka saat proses&nbsp;<em>coding</em>&nbsp;kamu harus mengikuti aturan sintaks yang berlaku. Aturan sintaks sangat tergantung dari bahasa pemrograman apa yang kamu gunakan saat menuliskan skrip.</p>
            
            <p>Dengan kata lain&nbsp;<em>coding</em>&nbsp;merupakan kegiatan yang dimana kamu memberitahukan komputer apa yang harus dia kerjakan untuk kamu. Sebuah kode yang ada pada skrip bisa diibaratkan layaknya bahasa sehari-hari. Setiap kode yang kamu tulis akan membantu komputer untuk mengetahui dan memahami apa yang ingin kamu lakukan pada komputer. Komputer akan menerima perintah ini dan komputer akan melakukan operasi berdasarkan perintah yang kamu tuliskan.</p>
            
            <p>Sempat disinggung sebelumnya, bahwa saat kamu menuliskan kode saat ngoding kamu harus memperhatikan aturan sintaks. Aturan sintaks ini sangat penting untuk kamu patuhi. Karena komputer merupakan mesin yang hanya mampu menerima kode atau perintah yang kamu masukkan. Apabila kamu tidak menuliskan kode sesuai dengan aturan sintaks dan ada kode yang salah kamu tulis, maka perintah yang kamu tulis tidak dapat dijalankan oleh komputer.</p>
            
            <p>Apabila saat kamu membaca artikel ini menggunakan perangkat komputer, silahkan klik kanan pada jendela web browser kamu. Kemudian pilih &ldquo;lihat sumber halaman&rdquo;, maka akan tampil sebuah skrip dari sekumpulan kode. Skrip tersebutlah yang memberitahu komputer untuk menampilkan halaman web ini.</p>
            
            <h3>Bahasa Pemrograman</h3>
            
            <p>Untuk memulai ngoding atau belajar&nbsp;<em>coding</em>, langkah pertama adalah menentukan bahasa pemrograman yang akan dipakai. Tentukan bahasa pemrograman sesuai dengan tujuan dan apa yang akan kamu buat. Terdapat berbagai macam bahasa pemrograman, setiap bahasa pemrograman memiliki tujuan dan karakteristiknya masing-masing.&nbsp;</p>
            
            <p>Misalnya kamu akan memulai&nbsp;<em>coding</em>&nbsp;untuk membuat aplikasi android, maka kamu bisa menggunakan bahasa pemrograman Java ataupun Kotlin. Sedangkan jika kamu akan memulai&nbsp;<em>coding</em>&nbsp;untuk membuat aplikasi web, maka kamu bisa menggunakan bahasa pemrograman PHP, Javascript, maupun bahasa pemrograman lainnya.&nbsp;</p>
            
            <p>Sebenarnya kamu bisa dengan leluasa memilih bahasa pemrograman yang akan digunakan. Berikut ini beberapa bahasa pemrograman populer yang bisa kamu gunakan untuk memulai&nbsp;<em>coding</em>.</p>
            
            <ol>
                <li>PHP</li>
                <li>Python</li>
                <li>Javascript</li>
                <li>Java</li>
                <li>C++</li>
                <li>C#</li>
                <li>C</li>
                <li>Ruby</li>
                <li>Swift</li>
                <li>R</li>
                <li>Go</li>
            </ol>
            '
        ]);

        Post::create([
            'title'=>'Laravel',
            'category_id'=>1,
            'thumb'=>'/thumbnail/laravel.png',
            'user_id'=>1,
            'content'=>'<h1 style="text-align:center"><span style="font-size:28px"><strong>Apa Itu Laravel?</strong></span></h1>

            <p>Laravel merupakan framework yang dapat membantu&nbsp;<em>web developer</em>&nbsp;dalam memaksimalkan penggunaan PHP dalam proses pengembangan&nbsp;<em>website</em>. Seperti diketahui, PHP sendiri merupakan bahasa pemograman yang cukup dinamis.</p>
            
            <p>Dimana kehadiran Laravel kemudian membuat PHP menjadi lebih&nbsp;<em>powerful</em>, cepat, aman, dan&nbsp;<em>simple</em>. Terlebih lagi, framework ini selalu memunculkan teknologi terbarunya di antara&nbsp;<em>framework</em>&nbsp;PHP lain.</p>
            
            <p><em>Framework</em>&nbsp;ini mengikuti struktur MVC atau&nbsp;<em>Model</em>&nbsp;<em>View</em>&nbsp;<em>Controller</em>. Dimana MVC adalah metode aplikasi yang memisahkan data dari tampilan berdasarkan komponen-komponen aplikasi, seperti manipulasi data,&nbsp;<em>controller</em>, dan&nbsp;<em>user</em>&nbsp;<em>interface</em>.</p>
            
            <p>Penggunaan struktur MVC ini membuat Laravel mudah untuk dipelajari dan mampu mempercepat proses pembuatan prototipe aplikasi web. Sebagaimana ia juga menyediakan fitur bawaan seperti otentikasi, mail, perutean, sesi, dan daftar berjalan.</p>
            
            <p>Laravel juga lebih berfokus pada&nbsp;<em>end-user</em>, yang artinya hanya berfokus pada kejelasan dan kesederhanaan, baik dari penulisan hingga tampilan. Ia pun bisa menghasilkan fungsional aplikasi web yang berjalan dengan semestinya.</p>
            
            <p>Hal seperti inilah yang membuat banyak perusahaan dan&nbsp;<em>developer</em>&nbsp;menggunakan Laravel untuk membangun apapun, mulai dari proyek kecil hingga proyek besar.</p>
            
            <h2><strong>Fitur-Fitur Pada Laravel</strong></h2>
            
            <p>Penggunaan Laravel dapat menghasilkan&nbsp;<em>website</em>&nbsp;yang lebih elegan, ekspresif, dan menyenangkan.&nbsp;<em>Framework</em>&nbsp;ini pun terbukti mampu mempermudah proses pengembangan&nbsp;<em>website</em>&nbsp;dengan beberapa fitur unggulannya, yang beberapa di antaranya meliputi:</p>
            
            <ul>
                <li><strong>Eloquent ORM.&nbsp;</strong><em>Framework</em>&nbsp;ini didasarkan pada ORM Eloquent yang menyediakan dukungan untuk hampir semua mesin&nbsp;<em>database</em>. Ia bekerja sempurna dengan MySQL dan SQLite. Ia pun menyediakan dokumentasi lengkap untuk semua fungsi Eloquent.</li>
                <li><strong>Blade Template Engine.&nbsp;</strong><em>Framework&nbsp;</em>ini menggunakan Blade yang mampu mendesain&nbsp;<em>layout</em>&nbsp;yang unik.&nbsp;<em>Layout</em>&nbsp;yang didesain dapat digunakan di tampilan lain sehingga dapat menghadirkan konsistensi desain dan struktur selama proses pengembangan.</li>
                <li>Routing Laravel dapat digunakan untuk membuat aplikasi yang tenang dengan mudah. Dimana dalam&nbsp;<em>framework</em>&nbsp;ini semua&nbsp;<em>request</em>&nbsp;dipetakan dengan bantuan rute. Anda pun dapat mengelompokkan, memberi nama, menerapkan filter, dan mengikat data model Anda terhadap rute tersebut.</li>
                <li>Di dalam Laravel, terdapat kumpulan modul dan&nbsp;<em>library</em>&nbsp;yang terkait dengan&nbsp;<em>composer</em>. Fitur ini akan membantu Anda menyempurnakan dan meningkatkan fungsionalitas&nbsp;<em>website</em>&nbsp;yang dibangun, serta mempermudah proses&nbsp;<em>update</em>-nya.</li>
                <li><strong>Testing and Debugging.&nbsp;</strong><em>Framework</em>&nbsp;ini dibangun dengan fitur proses pengecekan yang cukup lengkap. Dimana ia mendukung proses pengecekan dengan PHPUnit dan file phpunit.xml yang dapat disesuaikan dengan aplikasi web yang sedang dibangun.&nbsp;<em>Framework</em>&nbsp;ini pun dibangun menggunakan metode pembantu yang nyaman, yang memungkinkan Anda untuk menguji&nbsp;<em>website</em>&nbsp;secara ekspresif.</li>
                <li><strong>Query Builder and ORM.&nbsp;</strong>Laravel Database Query Builder menyediakan antarmuka yang lancar untuk membuat dan menjalankan&nbsp;<em>database quer</em>&nbsp;Fitur ini dapat digunakan untuk menjalankan berbagai operasi&nbsp;<em>database</em>&nbsp;di dalam&nbsp;<em>website</em>&nbsp;dan mendukung berbagai sistem&nbsp;<em>database</em>.</li>
                <li><em>Framework</em>&nbsp;ini memuat pengimplementasian otentikasi menjadi sangat sederhana. Dimana seluruh proses konfigurasi otentikasi sudah berjalan secara otomatis.</li>
            </ul>
            
            <h2><strong>Kelebihan Penggunaan Laravel</strong></h2>
            
            <p>Ada banyak sekali keuntungan yang bisa didapatkan oleh&nbsp;<em>web developer</em>&nbsp;ketika membangun sebuah&nbsp;<em>website</em>&nbsp;menggunakan Laravel. Adapun beberapa keuntungan tersebut meliputi:</p>
            
            <ul>
                <li><strong>Template yang Ringan.&nbsp;</strong><em>Template</em>&nbsp;yang ringan memungkinkan&nbsp;<em>developer</em>&nbsp;untuk membuat&nbsp;<em>website</em>&nbsp;yang&nbsp;<em>powerful</em>. Dimana<em>&nbsp;template</em>&nbsp;yang tersedia dapat ditambahkan CSS,&nbsp;<em>image</em>, maupun teks yang sesuai dengan kebutuhan.</li>
                <li><strong>Memiliki Banyak Library Object Oriented.&nbsp;</strong><em>Framework</em>&nbsp;ini memiliki banyak pilihan&nbsp;<em>library</em>&nbsp;<em>object</em>&nbsp;<em>oriented</em>&nbsp;yang tidak dimiliki oleh&nbsp;<em>framework</em>&nbsp;Dimana hal ini akan sangat berguna untuk membangun&nbsp;<em>website</em>&nbsp;yang kompleks.</li>
                <li><strong>Mendukung MVC.&nbsp;</strong>Model View Controller sangat berguna untuk memisahkan antara logika dan tampilan, sehingga file dokumentasi dapat tersusun dengan lebih rapi.</li>
                <li><strong>Tersedianya Tool Artisan<em>.&nbsp;</em></strong><em>Tool Artisan</em>&nbsp;memiliki fungsi untuk interaksi Laravel dengan&nbsp;<em>framework</em>&nbsp;lainnya dengan bantuan&nbsp;<em>command</em>&nbsp;<em>line</em>. Keberadaan&nbsp;<em>artisan</em>&nbsp;membuat&nbsp;<em>developer</em>&nbsp;mudah melakukan berbagai kegiatan lintas&nbsp;<em>framework</em>&nbsp;tanpa takut terjadi masalah.</li>
                <li><strong>Modul Bersifat Individu dan Independen.&nbsp;</strong>Dalam satu aplikasi Laravel, terdapat lebih dari 20 modul&nbsp;<em>library</em>&nbsp;yang masing-masingnya bersifat individu. Dimana modul tersebut juga bersifat independen dalam mengadopsi prinsip PHP modern. Karena itulah, modul tersebut dapat membuat aplikasi web menjadi lebih informatif, modular, dan responsif.</li>
            </ul>
            '
        ]);
        //2

        Post::create([
            'title'=>'Tips Menyiasati Rumah Mungil Minimalis Agar Tetap Nyaman dan Nampak Luas',
            'category_id'=>2,
            'thumb'=>'/thumbnail/designminimalis.jpg',
            'user_id'=>2,
            'content'=>'<h1 style="text-align:center"><strong>Tips Menyiasati Rumah Mungil Minimalis Agar Tetap Nyaman dan Nampak Luas</strong></h1>

            <p><strong>&nbsp;</strong>Lahan terbatas atau kecil jangan dijadikan halangan untuk tidak memiliki rumah. Di era sekarang ada banyak desain&nbsp;<a href="https://www.suara.com/tag/rumah-minimalis">r</a>umah minimalis&nbsp;yang nyaman.</p>
            
            <p>Luas tanah yang cenderung terbatas tentu menjadi tantangan tersendiri sehingga para pemilik rumah mungil pun harus cermat dalam menyiasati desain ruangan agar tercipta hunian yang nyaman dan terkesan luas meskipun di ruangan yang terbatas.</p>
            
            <p>&quot;Meningkatnya minat akan membeli rumah mungil, menjadikan pemiliknya harus lebih kreatif agar dapat menciptakan kesan ruangan yang luas,&quot; demikian disampaikan Public Relations TACO, Ashita, Kamis (02/06/2022).</p>
            
            <p>Salah satu caranya adalah menggunakan pilihan warna dan motif netral pada dinding maupun pembuatan custom furniture multifungsi guna menyesuaikan dengan bentuk dan ukuran ruangan.</p>
            
            <p>Selain itu, penting juga bagi pemilik rumah mungil untuk menambahkan tekstur pada ruangan untuk menghindari kesan flat, sehingga hunian pun jadi tampak lebih menarik dan alami.</p>
            
            <p>Ayusarita atau yang biasa disapa dengan sebutan Ririe, selaku pemilik dari @a_s_ruma memiliki hunian yang menjadi inspirasi generasi muda untuk memaksimalkan ruang terbatas.</p>
            
            <p>Ririe membagikan pengalamannya dalam merenovasi rumah mungil miliknya yang berukuran 120 m2.</p>
            
            <p>Memiliki hunian dengan ukuran yang tidak terlalu besar tidak menjadi halangan untuk dapat tetap menciptakan suasana yang lega dan nyaman, serta memaksimalkan desain dan fungsi furnitur rumah tangga. Dalam merenovasi rumah, saya sangat memperhatikan pemilihan motif, warna dan tekstur pada furnitur, serta pentingnya pemilihan furnitur yang fungsional agar dapat menghemat ruangan.&rdquo;</p>
            
            <p>Ririe memanfaatkan area bawah tangga untuk dijadikan rak sepatu, menggunakan murphy bed atau ranjang yang bisa dilipat ke dinding, serta membuat TV lift cabinet agar dapat menyimpan TV ketika sedang tidak sedang digunakan.</p>
            
            <p>Ia mengatakan, pemilihan lantai juga memiliki peran penting dalam mendekorasi rumah. Dia memilih lantai Vinyl untuk dapat menciptakan ruangan yang hangat, nyaman dan tampak lebih luas. Alasan lainnya adalah lantai ini mudah dipasang, tahan akan air, anti rayap dan mudah dibersihkan.</p>
            
            <p>Ia mengatakan, pemilihan lantai juga memiliki peran penting dalam mendekorasi rumah. Dia memilih lantai Vinyl untuk dapat menciptakan ruangan yang hangat, nyaman dan tampak lebih luas. Alasan lainnya adalah lantai ini mudah dipasang, tahan akan air, anti rayap dan mudah dibersihkan.</p>
            '
        ]);
        Post::create([
            'title'=>'Resep Membuat Donat Rendah Kalori, Caranya Gak Sulit!',
            'category_id'=>4,
            'thumb'=>'/thumbnail/donut.jpg',
            'user_id'=>2,
            'content'=>'<h1 style="text-align:center">Resep Membuat Donat Rendah Kalori, Caranya Gak Sulit!</h1>

            <p>Donat menjadi camilan yang begitu dihindari oleh beberapa orang karena dianggap memiliki kalori cukup tinggi. Hal ini tidak mengherankan, mengingat bahan-bahan yang digunakan sangat melimpah disertai&nbsp;<em>topping</em>&nbsp;yang selalu spektakuler.</p>
            
            <p>Buat kamu yang sedang menjalani program makan sehat atau menjaga pola makan, donat&nbsp;tetap bisa dinikmati dengan versi rendah kalori. Komponen yang dipakai pun cenderung lebih sehat, sehingga kamu bisa membuat camilan ini sebagai salah satu ide makan sedap tanpa merasa bersalah.</p>
            
            <h2>1. Siapkan membuat donat rendah kalori</h2>
            
            <p><strong>Bahan adonan donat:</strong></p>
            
            <ul>
                <li>100 gram tepung bebas gluten&nbsp;</li>
                <li>1 butir putih telur</li>
                <li>1/4 cangkir susu almon atau susu kedelai</li>
                <li>60 gram saus apel&nbsp;</li>
                <li>2 sdm air</li>
                <li>1/2 sdt baking soda&nbsp;</li>
                <li>1/4 sdt bubuk pengembang&nbsp;</li>
                <li>stevia secukupnya</li>
                <li>bubuk kayu manis secukupnya</li>
                <li>ekstrak vanila secukupnya</li>
            </ul>
            
            <p>Bahan&nbsp;<em>topping:</em></p>
            
            <ul>
                <li>gula kelapa secukupnya</li>
                <li><em>dark chocolate</em>&nbsp;secukupnya</li>
            </ul>
            
            <h2>2. Campur seluruh bahan adonan</h2>
            
            <p>Pada proses pembuatan donat versi rendah kalori ini kamu perlu mencampurkan seluruh bahan yang sudah disebutkan di atas secara merata. Pengadukan bisa menggunakan bantuan alat otomatis tertentu atau sekadar dicampur memakai spatula.</p>
            
            <p>Pastikan bahwa tidak ada tepung yang menggumpal saat proses persatuan adonan ini. Dengan begitu, saat dimasak, donat matang secara merata dan memiliki penampilan yang cantik begitu disajikan.</p>
            
            <p>&nbsp;</p>
            
            <h2>3. Cetak adonan donat secara merata</h2>
            
            <p>Bila bahan-bahan dari donat sudah tercampur rata, kamu bisa memulai untuk membentuk adonan menggunakan bantuan sendok&nbsp;<em>scoop</em>, plastik segitiga, atau cetakan donat khusus agar bentuknya jadi lebih rapi.</p>
            
            <p>Karakteristik adonan yang agak berbeda dari donat goreng biasa membuat adonan versi ini dapat langsung dibentuk sesuka hati tanpa melalui tahap&nbsp;<em>resting</em>&nbsp;atau pengistirahatan donat. Tenang saja, tetap mengembang sempurna, kok.</p>
            
            <h2>4. Panggang donat hingga matang</h2>
            
            <p>Umumnya, donat dimasak dengan metode penggorengan. Namun, sekarang kamu tidak perlu menggunakan minyak untuk mengolah makanan ini, karena donat dapat dipanggang dengan oven agar lebih sehat.</p>
            
            <p>Panggang adonan donat dengan suhu sekitar 170 derajat Celsius. Selalu lakukan pengecekan agar adonan tidak gosong. Bila sudah dikeluarkan, kamu bisa menikmatinya bersama&nbsp;<em>topping</em>&nbsp;dari gula kelapa atau&nbsp;<em>dark chocolate</em>&nbsp;secukupnya.</p>
            
            <h2>5. Tips memanggang donat</h2>
            
            <p>Proses pembuatan donat biasanya memakan waktu cukup panjang karena adonan harus selalu diistirahatkan. Tetapi pada metode kali ini, kamu tidak memerlukan waktu sebanyak itu, karena donat bisa segera dieksekusi.</p>
            
            <p>Di sisi lain, kamu dapat menggunakan bantuan dari minyak kelapa atau zaitun untuk dioleskan pada loyang agar adonan tidak menempel ketika dipanggang. Terutama jika media yang digunakan cenderung bukan material antilengket.</p>
            
            <p>Jadi, siapa bilang bahwa menikmati donat ternyata menakutkan? Bila kamu senang masak sendiri, donat bisa diubah jadi lebih rendah kalori dengan bahan-bahan yang ada di rumah. Ngemil jadi lebih leluasa, deh!</p>            
            '
        ]);
        Post::create([
            'title'=>'Akibat Johnny Depp Menang Persidangan, Parfum Koleksi Dior Makin Laris di Pasaran',
            'category_id'=>3,
            'thumb'=>'/thumbnail/john.jpg',
            'user_id'=>2,
            'content'=>'<h1 style="text-align:center"><strong>Akibat Johnny Depp Menang Persidangan, Parfum Koleksi Dior Makin Laris di Pasaran</strong></h1>

            <p>Kabar terbaru datang dari aktor sekaligus musisi Hollywood, Johnny Depp&nbsp;yang resmi memenangkan persidangan melawan istrinya, Amber Heard. Akibatnya, semakin banyak yang memberikan dukungan, bahkan untuk produk Dior&nbsp;yang iklannya dibintangi oleh dirinya.</p>
            
            <p>Sebelumnya, Johnny memang terseret kasus kekerasan dalam rumah tangga dengan istrinya, Amber Heard dan dinyatakan bersalah enam tahun lalu. Kemudian ia mencoba aju banding dan memberikan beberapa bukti yang menunjukkan bahwa ia tidak bersalah.</p>
            
            <p>Kasus yang melibatkan dirinya ini bahkan&nbsp; berdampak besar pada kehidupan karirnya, mulai dari dikeluarkan dari proyek film sampai model iklan. Untungnya, salah satu brand asal Perancis, Dior tetap berpendirian untuk bekerja sama dengan Johnny Depp.</p>
            
            <p>Kerja sama antara Dior dan Johnny sudah dimulai sejak tahun 2015 dan menjadi wajah dari koleksi parfum&nbsp;bernama &quot;Sauvage&quot;.&nbsp; Parfum untuk pria ini juga sempat menarik banyak peminat untuk mencoba langsung.</p>                      
            '
        ]);
        //3
        Post::create([
            'title'=>'3 Elemen Wajib yang Perlu Diterapkan di Rumah Minimalis',
            'category_id'=>2,
            'thumb'=>'/thumbnail/3ele.jpg',
            'user_id'=>3,
            'content'=>'<h1 style="text-align:center"><strong>3 Elemen Wajib yang Perlu Diterapkan di Rumah Minimalis</strong></h1>

            <h1><span style="font-size:16px"><span style="font-family:Arial,Helvetica,sans-serif">Rumah bergaya minimalis erat kaitannya dengan nuansa cerah, terlihat bersih, dan rapi karena menggunakan sedikit barang, tetapi fungsional. Tak heran, desain rumah minimalis digemari banyak orang sehingga&nbsp;mudah menjumpainya di mana saja.&nbsp; Apabila tertarik dengan gaya minimalis, ada tiga elemen wajib yang perlu diterapkan dalam rumah minimalis seperti dilansir dari Tarkett, Selasa (31/5/2022), berikut ini.&nbsp;</span></span></h1>
            
            <h1><span style="font-size:16px"><span style="font-family:Arial,Helvetica,sans-serif"><strong>Hal-hal penting dan sederhana</strong><br />
            Elemen pertama dari desain minimalis adalah mencakup hal-hal penting dan sederhana seperti pencahayaan, bentuk dan material yang indah, serta tata ruang yang terbuka untuk menciptakan rasa kebebasan dan relaksasi. Selain itu, rumah minimalis umumnya tidak memiliki ornamen dan dekorasi berlebihan. Beberapa detail yang digunakan tidak rumit, tetapi menyatu secara harmonis di dalam ruangan. Jika ingin menghadirkan dekorasi, sebaiknya menggunakan satu karya seni untuk menghias dinding ruang keluarga atau vas bunga yang indah di atas meja makan.&nbsp;<br />
            <br />
            <strong>Garis-garis yang bersih</strong></span></span></h1>
            
            <h1><span style="font-size:16px"><span style="font-family:Arial,Helvetica,sans-serif">Furnitur dan aksesori minimalis berfokus pada fungsionalitas dan kepraktisan. Permukaan yang datar, halus, serta garis yang kuat menciptakan pernyataan berani yang menekankan sifat esensial dari setiap benda.&nbsp; Perabot dan aksesori yang sangat berpola atau ramai tidak akan ditemukan dalam rumah minimalis karena berfokus pada kesederhanaan bentuk. Furnitur minimalis meliputi permukaan meja yang bersih, dinding kosong dengan sedikit karya seni, serta ruangan yang tidak berantakan akibat memiliki tumpukan kertas maupun koleksi pernak-pernik.&nbsp;</span></span></h1>
            
            <h1><br />
            <span style="font-size:16px"><span style="font-family:Arial,Helvetica,sans-serif"><strong>Palet warna monokrom</strong><br />
            Skema warna dalam rumah minimalis terdiri atas putih, beige, dan abu-abu. Warna-warna tersebut menciptakan ruang yang lapang, cerah, dan elegan. Di luar warna itu, membuat suasana minimalis kurang terasa serta membuat rumah terasa membosankan.</span></span></h1>
            
            <h1>&nbsp;</h1>
            
            <h1><span style="font-size:16px"><span style="font-family:Arial,Helvetica,sans-serif"><strong>Membuat rumah minimalis terlihat hangat&nbsp;</strong></span></span></h1>
            
            <h1><span style="font-size:16px"><span style="font-family:Arial,Helvetica,sans-serif">Ada beberapa cara membuat rumah minimalis terlihat hangat dan terasa mengundang seperti berikut ini;</span></span></h1>
            
            <h1><span style="font-size:16px"><span style="font-family:Arial,Helvetica,sans-serif">&nbsp;Padukan rona warna dan tekstur yang berbeda </span></span></h1>
            
            <h1><span style="font-size:16px"><span style="font-family:Arial,Helvetica,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;Saat menggunakan palet warna monokromatik, gabungkan rona warna yang berbeda dan campuran tekstur guna menghadirkan kehangatan dalam rumah minimalis. Salah satu cara melakukannya adalah menggunakan wallpaper linen, kain wol yang halus, dan karpet di kamar tidur. Sementara di kamar mandi, tektsur dan pola butiran dari ubin dapat menambah daya tarik visual sembari mempertahankan palet warna netral.</span></span></h1>
            
            <h1><span style="font-size:16px"><span style="font-family:Arial,Helvetica,sans-serif">&nbsp; Gorden, tempat tidur, bantal, dan karpet dalam berbagai tekstur seperti linen, wol, dan katun hanyalah beberapa contoh membuat rumah minimalis terasa hangat serta nyaman.</span></span><br />
            <br />
            &nbsp;</h1>                                  
            '
        ]);

        Post::create([
            'title'=>'Cara Mendekorasi Ruangan Bergaya Minimalis dengan Nuansa Hitam',
            'category_id'=>2,
            'thumb'=>'/thumbnail/bls.jpg',
            'user_id'=>3,
            'content'=>'<h1 style="text-align:center"><strong>Cara Mendekorasi Ruangan Bergaya Minimalis dengan Nuansa Hitam</strong></h1>

            <h1><br />
            <span style="font-size:16px">Minimalisme identik dengan warna putih lantaran menyampaikan citra minimalis, yakni kebersihan dan kesederhanaan. Selain itu, putih juga cocok bagi rumah minimalis yang menyukai suasana terang lantaran dapat membuat ruangan terasa lebih cerah sekaligus lebih besar dari ukuran sebenarnya.</span></h1>
            
            <h1><span style="font-size:16px">Meski demikian, rumah bergaya minimalis tidak selalu menggunakan putih. Dikutip dari HGTV, Senin (30/5/2022), rumah minimalis bisa menggunakan warna hitam jika merasa putih terlalu terang. Bahkan, putih dan hitam bisa dikombinasikan untuk menciptakan nuansa monokrom sehingga rumah minimalis terlihat lebih modern. Nah, berikut cara mendekorasi ruangan bergaya minimalis dengan nuansa hitam.&nbsp;<br />
            <br />
            <strong>Dapur</strong></span></h1>
            
            <h1><br />
            <span style="font-size:16px">Kabinet dan meja dapur berwarna putih dapat membuat dapur terlihat bersih, modern, dan minimalis. Namun, warna ini cukup sering digunakan sehingga dapat membuat ruangan terasa membosankan. Kamu bisa mengubah tampilannya menggunakan warna hitam untuk membuat dapur terlihat lebih mewah.&nbsp;</span></h1>
            
            <h1>&nbsp;</h1>
            
            <h1><span style="font-size:16px">Selanjutnya, lengkapi dapur minimalis dengan aksesori berwarna emas supaya terlihat lebih cerah, mengundang, baru, dan membuat dapur seperti memiliki kepribadian.</span></h1>
            
            <h1><span style="font-size:16px">Untuk menjaga minimalisme di dapur, gunakan palet warna sederhana pada mixer, kain lap, karpet, tempat bumbu dapur, dan sebagainya.&nbsp;<br />
            <br />
            Apabila ingin melakukan perubahan secara menyeluruh, tambahkan ubin marmer pada area backsplash untuk memberi dampak besar.<br />
            <br />
            <strong>Ruang keluarga</strong><br />
            Mengusung gaya hidup minimalis berarti menyediakan ruang untuk kehidupan daripada membuat setiap sudut ruang serta setiap permukaan penuh dengan barang. Ingatlah bahwa kamu bisa menggunakan warna lain bersamaan dengan hitam, tetapi menggabungkan warna berani akan mengganggu tampilan ruangan.&nbsp;<br />
            <br />
            Misalnya, menggunakan warna coklat tan atau camel di ruang keluarga secara otomatis dapat membuat ruangan terasa lebih nyaman.<br />
            <br />
            Apabila hanya menginginkan sedikit warna hitam, pertimbangkan menambahkan meja kecil hitam, bingkai foto hitam, karpet hitam dalam motifnya, atau lampu dengan kap atau tiang berwarna hitam.&nbsp;<br />
            <br />
            Jika ingin benda dekoratif berukuran besar dan berwarna hitam, pilih sofa dan pastikan sofa memberi Anda kenyamanan, terlepas dari modelnya.<br />
            <br />
            <strong>Ruang kerja</strong><br />
            Hal pertama yang muncul dalam pikiran ketika berbicara tentang ruang kerja adalah meja. Pilih meja hitam yang ramping dan terstruktur dengan baik.</span></h1>
            
            <h1><span style="font-size:16px">Bisa pula menggabungkan kayu gelap dan emas untuk membuat meja kerja terlihat lebih modern, tetapi tetap minimalis. Sebab, minimalisme juga sering menghadirkan elemen-elemen alami.<br />
            <br />
            Selain meja kayu, hadirkan elemen alami dengan membawa tanaman hidup ke dalam ruangan. Jika hanya ingin menghadirkan sedikit warna hitam, gunakan peralatan kantor berwarna hitam atau mengecat satu dinding berwarna hitam sebagai dinding aksen.</span><br />
            &nbsp;</h1>                                 
            '
        ]);
        Post::create([
            'title'=>'Pengertian MySQL',
            'category_id'=>1,
            'thumb'=>'/thumbnail/mysql.png',
            'user_id'=>3,
            'content'=>'<h1 style="text-align:center"><strong>Pengertian MySQL</strong></h1>

            <p>Website&nbsp;tentu saja membutuhkan database server atau hosting&nbsp;untuk menampung berbagai macam informasi. Berbagai macam data dibutuhkan oleh website seperti username, password, font, URL, dan sejenisnya. MySQL adalah salah satu sistem manajemen database yang biasa digunakan untuk mengelola data tersebut.</p>
            
            <p>Di artikel ini kami akan membahas secara lengkap mengenai apa itu MySQL</p>
            
            <h2><strong>Pengertian MySQL</strong></h2>
            
            <p>MySQL adalah sebuah database management system (manajemen basis data) menggunakan perintah dasar&nbsp;<a href="https://www.niagahoster.co.id/blog/apa-itu-query-sql/" rel="noreferrer noopener" target="_blank">SQL</a>&nbsp;(<em>Structured Query Language</em>) yang cukup terkenal. Database management system (DBMS) MySQL multi pengguna dan multi alur ini sudah dipakai lebih dari 6 juta di seluruh dunia</p>
            
            <p>MySQL adalah DBMS yang open source dengan dua bentuk lisensi, yaitu Free Software (perangkat lunak bebas) dan Shareware (perangkat lunak berpemilik yang penggunaannya terbatas). Jadi MySQL adalah database server yang gratis dengan lisensi GNU General Public License (GPL) sehingga dapat Anda pakai untuk keperluan pribadi atau komersil tanpa harus membayar lisensi yang ada.</p>
            
            <p>Seperti yang sudah disinggung di atas, MySQL masuk ke dalam jenis RDBMS (Relational Database Management System). Maka dari itu, istilah semacam baris, kolom, tabel, dipakai pada MySQL. Contohnya di dalam MySQL sebuah database terdapat satu atau beberapa tabel.</p>
            
            <p>SQL sendiri merupakan suatu bahasa yang dipakai di dalam pengambilan data pada relational database atau database yang terstruktur. Jadi MySQL adalah database management system yang menggunakan bahasa SQL sebagai bahasa penghubung antara perangkat lunak aplikasi dengan database server.</p>                                             
            '
        ]);

        Post::create([
            'title'=>'Resep Nasi Goreng Solaria, Terungkap Bumbu Rahasianya',
            'category_id'=>4,
            'thumb'=>'/thumbnail/nasgor.jpg',
            'user_id'=>4,
            'content'=>'<h1 style="text-align:center"><strong>Resep Nasi Goreng Solaria, Terungkap Bumbu Rahasianya</strong></h1>

            <p>Simak resep nasi goreng solaria yang jadi menu favorit banyak orang.</p>
            
            <p>Nasi goreng menjadi salah satu menu khas Indonesia.</p>
            
            <p>Nasi goreng bisa dikatakan hasil kreativitas orang Indonesia kerena tidak ingin membuang nasi.</p>
            
            <p>Untuk membuat nasi goreng memang menggunakan nasi yang sudah didiamkan semalaman.</p>
            
            <p>Hasilnya akan lebih enak dibanding dengan nasi yang baru saja matang.</p>
            
            <p>Ada beragam jenis nasi goreng dengan beragam isian pula.</p>
            
            <p>Salah satu yang paling terkenal adalah nasi goreng solaria, salah satu cafe di Indonesia.</p>
            
            <p>Selama ini orang bertanya-tanya apa bumbu rahasia dari pembuatan nasi goreng solaria ini.</p>
            
            <p>Kunci kelezatan nasi goreng solaria adalah pada kecap ikan.</p>
            
            <p>Bahkan kecap ikan jadi bumbu wajibnya.</p>
            
            <p>Tanpa kecap ikan, rasa nasi goreng ini tidak akan terlalu enak.</p>
            
            <p>Kecap ikan punya rasa asin dan aroma yang sedap banget dan gurih.</p>
            
            <p>Karena rasanya asin, penggunakan garam sebenarnya sudah tidak diperlukan lagi.</p>
            
            <p>Selain kecap ikan, berikut rahasia lain dari pembuatan nasi goren solaria.</p>
            
            <p><strong>1. Tumis Bawang Putih Sampai Harum Betul</strong></p>
            
            <p>Perhatikan deh, nasi goreng ala Solaria punya aroma bawang putih yang dominan.</p>
            
            <p>Karena itu, penumisan bawang putih di tahan pertamanya harus sampai kuning betul.</p>
            
            <p>Pertamanya, gunakan api sedang untuk menumis bawang putih.</p>
            
            <p>Tunggu sampai bawang putihnya kuning kecokelatan, baru masukan bahan tambahan seperti ayam atau seafood.</p>
            
            <p>Setelah itu, baru besarkan api.</p>
            
            <p>Kalau dari awal api sudah besar, bawang keburu cokelat padahal belum matang.</p>
            
            <p>Hasilnya, nasi goreng jadi langu dan bukannya harum.</p>
            
            <p><strong>2. Api Harus Besar</strong></p>
            
            <p>Untuk membuat nasi goreng ala Solaria, gunakan api yang sangat besar.</p>
            
            <p>Tujuannya supaya nasi punya aroma gosong yang enak banget.</p>
            
            <p>Selain itu, aduk nasi dengan gerakan memencet-mencet nasi ke wajan supaya tiap bulir nasinya bisa dibalut aroma gosong ini.</p>
            
            <p>Rasanya dijamin enak.</p>
            
            <p>&nbsp;</p>
            
            <p>&nbsp;</p>                                                         
            '
        ]);

        Post::create([
            'title'=>'Mengenal Front End dan Back End Developer: Definisi, Tugas, Skill yang Dibutuhkan, Hingga Perbedaannya',
            'category_id'=>1,
            'thumb'=>'/thumbnail/fend.jpg',
            'user_id'=>4,
            'content'=>'<h1 style="text-align:center"><strong>Mengenal Front End dan Back End Developer: Definisi, Tugas, Skill yang Dibutuhkan, Hingga Perbedaannya</strong></h1>

            <p>Beberapa tahun terakhir, pekerjaan sebagai&nbsp;<em>front end dan back end developer&nbsp;</em>cukup banyak diminati. Hal ini tidak terlepas dari berkembangnya industri teknologi dan digital, yang mana salah satunya terkait dengan&nbsp;<em>web developer</em>. Bagi kamu yang berminat dengan pengembangan aplikasi atau situs web, mungkin pekerjaan ini cocok denganmu. Namun, tak jarang beberapa orang masih bingung mengenai perbedaan dua pekerjaan ini. Jadi apa itu&nbsp;<em>front end</em>&nbsp;atau<em>&nbsp;back end</em>? Dan apa saja perbedaannya? Berikut adalah penjelasan&nbsp; mengenai perbedaan antara&nbsp;<em>front end</em>&nbsp;dan&nbsp;<em>back end developer.&nbsp;</em></p>
            
            <h2>Apa itu&nbsp;<em>front end developer</em>?</h2>
            
            <p>Sederhanya&nbsp;<em>front end developer</em>&nbsp;adalah pekerjaan dalam bentuk pemrograman yang mengelola dan mengembangkan tampilan sebuah aplikasi atau<em>&nbsp;website</em>. Adapun hal yang biasa dilakukan oleh<em>&nbsp;front end developer&nbsp;</em>yaitu mengkombinasikan teknik desain, teknologi, dan pemrograman untuk menghasilkan tampilan situs web yang menarik, interaktif, serta menangani&nbsp;<em>debugging</em>&nbsp;(masalah) yang terjadi.&nbsp;&nbsp;</p>
            
            <p>Dikutip dari bootcamp.berkeley.edu,&nbsp;<em>front end</em>&nbsp;memiliki tanggung jawab untuk memastikan bahwa pengunjung dapat dengan mudah mengakses dan menggunakan sebuah aplikasi atau situs web. Contohnya, setiap kali kamu mengunjungi situs web, apa pun yang kamu lihat, klik, atau gunakan adalah pekerjaan&nbsp;<em>front end</em>. Mulai dari desain/tata letak, konten, tombol, gambar, navigasi, dan tautan internal.</p>
            
            <p>Dalam aktivitasnya,&nbsp;<em>front end developer</em>&nbsp;akan sering bekerja menggunakan HTML, CSS, dan JavaScript untuk mengembangkan situs web atau aplikasi web. Sehingga pengguna dapat melihat dan berinteraksi dengan produk tersebut secara langsung.&nbsp;</p>
            
            <p>Di samping itu, umumnya<em>&nbsp;front end</em>&nbsp;tidak bekerja sendirian. Mereka juga berkolaborasi dengan berbagai tim, mulai dari back end, UI/UX, hingga dengan marketing. Misalnya, ketika mengerjakan tampilan sebuah&nbsp;<em>website</em>.&nbsp;<em>Front end</em>&nbsp;akan bekerja sama dengan UI/UX terkait desain&nbsp;<em>website&nbsp;</em>yang diinginkan.&nbsp;</p>
            
            <p>Tim UI/UX akan mendesain tampilan dari&nbsp;<em>website&nbsp;</em>dan kemudian mereka akan memberikan desain tersebut ke&nbsp;<em>front end</em>. Selanjutnya tim<em>&nbsp;front end</em>&nbsp;akan mengubah gambar desain dari UI/UX ke kode yang akan menghasilkan elemen visual pada tampilan&nbsp;<em>website</em>. Singkatnya, seorang&nbsp;<em>front end developer</em>&nbsp;mengaktifkan desain dan tombol-tombol pada sebuah web/aplikasi yang telah dirancang oleh UI/UX.&nbsp;</p>
            
            <h2>Tugas dan tanggung jawab&nbsp;<em>front end developer</em></h2>
            
            <ol>
                <li>Memastikan kelayakan teknis desain dari UI/UX</li>
                <li>Mengoptimalkan kecepatan dari&nbsp;<em>website</em>/aplikasi</li>
                <li>Menerapkan elemen visual situs web atau aplikasi</li>
                <li>Menggunakan desain responsif dalam pembuatan antarmuka pengguna situs web atau aplikasi</li>
                <li>Menguji situs web atau aplikasi untuk kegunaan</li>
                <li>Memecahkan masalah kode apa pun yang tidak berfungsi</li>
                <li>Meningkatkan arsitektur visual situs web atau aplikasi</li>
                <li>Memastikan bahwa semua kelayakan dari tampilan&nbsp;<em>website&nbsp;</em>sebelum mengirimkannya ke tim back end</li>
                <li>Berkolaborasi tim lainnya</li>
            </ol>
            
            <h2>Skill yang harus dimiliki&nbsp;<em>front end developer</em></h2>
            
            <h3>1. Menguasai bahasa pemrograman HTML dan CSS</h3>
            
            <p>HTML dan CSS merupakan skill utama yang harus dikuasai untuk menjadi seorang&nbsp;<em>front end developer</em>. Hal ini karena CSS (<em>Cascading Style Sheets</em>) dan HTML (<em>HyperText Markup Language</em>) merupakan landasan dari pengembangan web. HTML digunakan untuk membuat rangkaian utama dari sebuah&nbsp;<em>website</em>. Sedangkan CSS digunakan dalam mengatur tampilan dari&nbsp;<em>website&nbsp;</em>tersebut, seperti,&nbsp; tata letak, warna, font, dan gaya halaman.&nbsp;</p>
            
            <h3>2. JavaScript</h3>
            
            <p>Jika CSS dan HTML digunakan untuk membuat dasar dari sebuah&nbsp;<em>website</em>, maka JavaScript diperlukan untuk membuat situs web menjadi interaktif. Dikutip dari hackreactor.com, Javascript juga biasanya digunakan dalam membuat aplikasi web dan seluler, membangun server web sederhana, serta mengembangkan game. Selain itu, untuk kemampuan yang lebih lanjut, seorang&nbsp;<em>front end</em>&nbsp;juga harus memiliki kemampuan TypeScript. TypeScript adalah superset JavaScript yang merupakan kompilasi dari JavaScript biasa.</p>
            
            <h3>3.&nbsp;<em>Frameworks and Libraries</em></h3>
            
            <p>Menggunakan bahasa pemrograman bukanlah hal mudah, terkadang kamu membutuhkan berbagai hal yang dapat menunjang pekerjaanmu, salah satunya yaitu&nbsp;<em>framework</em>. Dengan menggunakan&nbsp;<em>framework,&nbsp;</em>kamu dapat meringkas rangkaian kode yang panjang menjadi lebih ringkas. Ada beberapa jenis&nbsp;<em>framework&nbsp;</em>seperti&nbsp; Angular dan Vue JS.</p>
            
            <p>Sedangkan&nbsp;<em>libraries</em>&nbsp;merupakan kumpulan kode yang telah ditulis sebelumnya yang dapat digunakan pengguna lain untuk mengoptimalkan tugas. Salah satu jenis&nbsp;<em>libraries</em>&nbsp;yang sering digunakan yaitu jQuery. jQuery adalah kumpulan&nbsp;<em>plugin</em>&nbsp;dan ekstensi yang membuat penggunaan JavaScript di situs web yang telah dibuat menjadi lebih cepat dan lebih mudah.&nbsp;</p>
            
            <h3>4. CSS&nbsp;<em>preprocessors</em></h3>
            
            <p>Ketika ruang lingkup dan pengkodingan pada sebuah&nbsp;<em>website&nbsp;</em>semakin besar,&nbsp; maka penggunaan CSS akan bertambah sulit. Tak jarang seorang&nbsp;<em>front end developer</em>&nbsp;terjebak pada kondisi menulis kode berulang atau mengutak-atik struktur file yang salah. Sehingga dapat membuang waktu yang cukup banyak. Adapun solusi dari hal tersebut yaitu penggunaan preprocessor CSS. Dilansir dari interviewbit.com, penggunaan preprocessor CSS adalah metode lain untuk mempermudah pemrograman CSS. SASS, LESS, dan Stylus adalah&nbsp;<em>preprocessor&nbsp;</em>CSS yang memungkinkan pengembang membuat kode dalam bahasa praprosesor. Dengan begitu, seorang&nbsp;<em>front end developer</em>&nbsp;bisa menyelesaikan segala sesuatu yang akan jauh lebih sulit dicapai dengan CSS.&nbsp;<em>Preprocessor&nbsp;</em>CSS nantinya akan membantu untuk memverifikasi kode yang telah diatur di situs web berfungsi atau tidak.</p>
            
            <h3>5.&nbsp;<em>Responsive design</em></h3>
            
            <p>Seperti yang kamu ketahui, kini semakin banyak penggunaan berbagai perangkat seperti smartphone dan tablet dalam mengakses internet. Hal ini juga mempengaruhi keahlian yang harus dimiliki seorang yang bekerja sebagai front end.&nbsp;<em>Responsive design</em>&nbsp;adalah pendekatan tampilan grafis yang digunakan untuk membuat konten yang sesuai dengan berbagai ukuran layar. Saat membuat situs web,&nbsp;<em>front end</em>&nbsp;harus dapat memastikan tampilan halaman dapat beradaptasi dengan perangkat yang digunakan oleh pengunjung. Biasanya untuk membuat tampilan dengan responsive design,&nbsp;<em>front end</em>&nbsp;dapat menggunakan kerangka kerja CSS seperti Bootstrap.&nbsp;</p>
            
            <h3>6.<em>&nbsp;Testing dan debugging</em></h3>
            
            <p>Seorang<em>&nbsp;front end developer</em>&nbsp;harus memiliki kapasitas untuk menguji kelayakan sebuah situs web dan bebas dari bug. Dalam melakukan hal tersebut, ada berbagai pendekatan untuk melakukan testing. Salah satunya yaitu, pengujian fungsional untuk memeriksa bagian tertentu dari sebuah situs web dan memvalidasi bahwa kinerjanya sesuai dengan pengkodingan yang telah dilakukan.&nbsp;</p>
            
            <h3>7.&nbsp;<em>Version control</em></h3>
            
            <p><em>Version control</em>&nbsp;adalah proses merekam dan mengontrol perubahan pada kode sumber sehingga jika terjadi kesalahan, kamu tidak perlu memulai dari awal lagi. Dalam melakukan&nbsp;<em>version control&nbsp;</em>kamu dapat menggunakan Git. Git adalah salah satu sistem kontrol versi yang paling banyak digunakan. Sehingga jika ingin bekerja dalam pengembangan web, kamu harus mempelajari cara menggunakan Git.&nbsp;</p>
            
            <p>&nbsp;</p>
            
            <h2>Apa itu&nbsp;<em>back end developer</em>?</h2>
            
            <p>Jika&nbsp;<em>front end</em>&nbsp;lebih banyak berurusan dengan tampilan situs web dan berorientasi dengan kenyamanan pengunjung, maka&nbsp;<em>back end developer</em>&nbsp;lebih banyak bekerja dengan hal-hal yang terkait server dari sebuah aplikasi atau situs web. Dikutip dari indeed.com,&nbsp;<em>back end developer&nbsp;</em>adalah pekerjaan yang bertugas mengembankan, menyimpan data, dan komunikasi antara database situs web atau aplikasi. Tiga komponen utama dari pekerjaan b<em>ack end developer</em>&nbsp;yaitu server, aplikasi, dan database. Sehingga<em>&nbsp;back end developer</em>&nbsp;juga memiliki peran penting dalam kinerja situs web atau aplikasi.</p>
            
            <p>Pada praktiknya, f<em>ront end&nbsp;</em>developer menggunakan berbagai jenis alat, bahasa pemrograman, dan kerangka kerja untuk menyelesaikan pekerjaannya. Untuk melakukan hal tersebut, mereka menggunakan berbagai jenis program mulai dari Java, .NET, PHP, Ruby, NodeJS, dan Python.&nbsp;</p>
            
            <p>Selain itu,&nbsp;<em>back end</em>&nbsp;juga bekerja sama dengan tim lainnya, khususnya tim front end.&nbsp; Hal ini karena Mereka akan saling mengirim dan menerima informasi dalam proses mengembangkan sebuah situs web.</p>
            
            <p>Dikutip dari indeed, salah satu contoh hasil kerja&nbsp;<em>back end developer&nbsp;</em>yaitu ketika kamu membeli kemeja secara online.&nbsp;<em>Back end developer</em>&nbsp;akan bertanggung jawab untuk menyimpan informasi kartu kredit, ukuran kemeja yang kamu pesan, dan informasi lain terkait pembelian yang kamu lakukan. Singkatnya, kamu berinteraksi dengan&nbsp;<em>front end</em>&nbsp;untuk melakukan pembelian dan&nbsp;<em>back end</em>&nbsp;menyimpan semua informasi kamu di&nbsp;<em>database</em>&nbsp;server.</p>
            
            <h2>Tugas dan tanggung jawab&nbsp;<em>back end developer</em></h2>
            
            <ol>
                <li>Mengelola dan mengembangkan sumber daya API (Application Programming Interface) yang berfungsi di seluruh perangkat</li>
                <li>Membuat sistem pemrosesan pembayaran yang menyimpan data yang diperlukan dengan aman</li>
                <li>Selalu perbarui aplikasi web, aman, dan cepat</li>
                <li>Memantau status server</li>
                <li>Menerapkan algoritma dan memecahkan masalah yang terkait dengan sistem server atau data base</li>
                <li>Mengembangkan CMS (Content Management System);</li>
                <li>Mendukung pengembangan frontend dengan komunikasi yang jelas dan dokumentasi yang baik</li>
                <li>Menyimpan dan mengelola data secara efektif&nbsp;</li>
            </ol>
            
            <h2>Skill yang harus dimiliki&nbsp;<em>back end developer</em></h2>
            
            <h3>1. Memahami bahasa pemrograman&nbsp;<em>back end</em></h3>
            
            <p>Jika&nbsp;<em>front end</em>&nbsp;menggunakan HTML dan CSS, maka&nbsp;<em>back end</em>&nbsp;lebih sering menggunakan bahasa pemrograman seperti, Java,&nbsp;Python, PHP. Java merupakan bahasa pemrograman yang banyak digunakan dalam mengembangkan&nbsp;<em>back end</em>&nbsp;untuk aplikasi dan situs web. Sedangkan untuk melakukan pengkodingan terkait server,&nbsp;<em>back end developer</em>&nbsp;biasanya menggunakan Python dan PHP.&nbsp;&nbsp;</p>
            
            <h3>2. Memiliki pengetahuan mengenai<em>&nbsp;frameworks</em></h3>
            
            <p>Seorang&nbsp;<em>back end developer</em>&nbsp;harus membiasakan diri dengan frameworks dalam merancang sebuah&nbsp;<em>website</em>.&nbsp;<em>Frameworks</em>&nbsp;web dapat memberikan landasan dasar bagi backend developer agar dapat membangun program tertentu menggunakan bahasa pemrograman pilihan mereka. Jika bahasa pilihanmu adalah Java, kamu dapat menggunakan Spring atau Micronaut. Jika bahasa pilihanmu adalah Python, kamu dapat menggunakan Django atau Flask sebagai kerangka kerja.&nbsp;</p>
            
            <h3>3. Memiliki pengetahuan tentang API</h3>
            
            <p>Dikutip dari bloomtech.com, API telah menjadi aspek yang semakin penting dalam pengembangan&nbsp;<em>back end</em>.&nbsp;<em>Application Programming Interface</em>&nbsp;atau API adalah seperangkat aturan dan definisi yang memungkinkan klien, perangkat lunak, atau layanan yang berbeda untuk berhubungan satu sama lain melalui internet. Seorang&nbsp;<em>back end developer</em>&nbsp;harus memiliki pengetahuan yang luas tentang API. Hal ini karena mereka adalah media yang memungkinkan transfer data. API umumnya bertindak sebagai mediator antara backend dan database yang memungkinkan developer mengambil data pengguna.</p>
            
            <h3>4. Struktur data dan algoritma</h3>
            
            <p><em>Back end developer</em>&nbsp;akan selalu berhubungan dengan data. Agar dapat mengelola data, seorang<em>&nbsp;back end developer</em>&nbsp;harus memiliki pemahaman dasar tentang proses, struktur, dan algoritma yang digunakan untuk mengimplementasikan dan menampilkan data tersebut. Beberapa di antaranya termasuk pencarian linier dan biner, implementasi kode hash, penyortiran data, tumpukan, antrian, dan daftar.</p>
            
            <h3>5.<em>&nbsp;Databases and cache</em></h3>
            
            <p>Setiap situs web membutuhkan database untuk menangani data pengunjung. Database tersebut nantinya akan memudahkan&nbsp;<em>back end developer</em>&nbsp;untuk untuk memulihkan, mengatur, mengubah, dan menyimpan informasi. Dikutip dari interviewbit.com, ada dua jenis database yang tersedia di pasar yaitu SQL, dan NoSQL. Data base SQL adalah data base yang mana data dipetakan dalam tabel dan masing-masing terkait satu sama lain secara signifikan. Sedangkan data NoSQL adalah database yang tidak membutuhkan skema dan tidak terkait antara setiap tabel. Namun, semua alat ini digunakan untuk menangani data dalam jumlah besar, dan mereka juga menggunakan&nbsp;<em>cache</em>&nbsp;untuk data kecil pengguna individu.&nbsp;</p>
            
            <h3>6. Mengenal berbagai jenis<em>&nbsp;s</em><em>erver</em></h3>
            
            <p>Sebagai seorang&nbsp;<em>back end developer</em>, penting bagi kamu memiliki pemahaman yang dalam mengenai&nbsp; server. Server adalah bagian komputer atau sistem yang menyediakan data, sumber daya, dan layanan (penyimpanan&nbsp;<em>file,</em>&nbsp;keamanan, dan basis data) ke komputer atau pengunjung&nbsp;<em>website&nbsp;</em>melalui jaringan. Beberapa server yang paling populer adalah Apache, NGINX, dan Microsoft.&nbsp;</p>
            
            <p>&nbsp;</p>
            
            <p>&zwj;Nah, sekarang kamu pasti sudah tidak bingung lagi kan, mengenai apa itu<em>&nbsp;front end</em>&nbsp;dan&nbsp;<em>back end</em>. Semoga kamu dapat menentukan salah satunya untuk menjadi pekerjaan yang diidamkan. Selain itu, bagi kamu yang ingin mengembangkan kemampuan di bidang teknologi seperti web developer, langsung saja menuju&nbsp;<a href="https://skillacademy.com/courses/CAT-I25XOX83" rel="noopener" target="_blank">Skill Academy</a>. Karena di Skill Academy tersedia berbagai kelas pelatihan dengan materi yang mendalam. Jadi tunggu apa lagi, yuk&nbsp;<em>upgrade skill</em>-mu.&nbsp;&nbsp;</p>                                                   
            '
        ]);
        Post::create([
            'title'=>'Mengulik Desain Baru All New Honda HR-V yang Diklaim Sesuai Gaya Hidup Konsumen',
            'category_id'=>2,
            'thumb'=>'/thumbnail/hrv.jpg',
            'user_id'=>4,
            'content'=>'<h1 style="text-align:center"><strong>Mengulik Desain Baru All New Honda HR-V yang Diklaim Sesuai Gaya Hidup Konsumen</strong></h1>

            <p>Generasi baru all new Honda HR-V&nbsp;tampil dengan berbagai ubahan yang cukup mencolok. Berbeda dengan sebelumnya, desain eksterior sport utility vehicle (SUV) milik pabrikan asal Jepang ini diklaim mendukung gaya hidup konsumennya, dengan teknologi canggih.</p>
            
            <p>Large Project Leader of All-new Honda HR-V Honda Motor Co., Ltd., Automobile Operations, Monozukuri Center, Yoshitomo Ihashi mengatakan, proses untuk mendesain gaya HR-V terbaru ini memiliki tampilan yang berbeda dengan garis tajam yang lebih stylish dan sporti.</p>
            
            <p>&quot;Kami memikirkan desainnya sejak lama, melihat konsumen semakin ke sini lebih suka desain seperti apa,&quot; ujar Isahi secara virtual di Mandalika, Lombok, Nusa Tenggara Barat.</p>
            
            <p>Lanjutnya, Honda HR-V baru ini mengusung konsep Amp Up Your Life yang diharapkan bisa membantu konsumen untuk beraktivitas, dan lebih kekinian.</p>
            
            <p>&quot;Saya pikir, desain HR-V yang sekarang sesuai dengan konsumen masa kini. Dan hasilnya, sangat diterima dengan baik,&quot; tegasnya.</p>
            
            <p>sisi eksterior HR-V terbaru menampilkan perubahan desain total dengan garis-garis tajam yang membuatnya lebih stylish &amp; sporty dari generasi sebelumnya.</p>
            
            <p>Pada sisi depan, All New HR-V&nbsp;tampil agresif dan sporty dengan desain grille depan baru yang terintegrasi dengan Full LED Headlight with Sequential LED Turning Signal dan juga dilengkapi dengan LED Fog Light.</p>
            
            <p>&nbsp;</p>
            
            <h2>Desain Tangguh</h2>
            
            <p>Sedangkan kesan tangguh pada All New Honda HR-V semakin kuat dengan desain baru pada pelek 18 inci yang agresif.</p>
            
            <p>Sementara pada interior, All New HR-V menawarkan 4,2 inci Interactive TFT Meter yang menampilkan berbagai informasi saat berkendara, seperti Honda SENSING, Rear Seat Reminder, indikasi lampu pada kendaraan dan konsumsi bahan bakar.</p>                                                               
            '
        ]);
    }
}
