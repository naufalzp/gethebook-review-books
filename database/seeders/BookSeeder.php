<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run()
    {

        Book::create([
            'title' => 'Alasan untuk Tetap Hidup',
            'slug' => 'alasan-untuk-tetap-hidup',
            'description' => 'Apa rasanya menjadi orang yang mengalami gangguan kecemasan atau depresi? Ada dorongan yang membanjiri perasaan dan pikiran mereka sampai-sampai tubuh fisiknya pun ikut sakit. Bahkan, tak sedikit dari mereka yang akhirnya memutuskan untuk bunuh diri. Matt Haig pernah berada di titik itu. Ia pernah mencoba bunuh diri di pinggir tebing ketika berusia 24 tahun. Serangan panik yang bertubi-tubi dan harapan yang tak lagi terlihat membuatnya berpikir bahwa mengakhiri segalanya adalah hal terbaik. Tetapi, pada langkah terakhir, ia berhenti dan mengurungkan niatnya. Sampai sekarang, ia menjadi bukti bahwa gangguan kecemasan dan depresi bisa diatasi. Melalui buku ini, Matt Haig akan membagikan pengalamannya, mulai dari gejala depresi, rasanya mendapat serangan panik, hingga apa yang membuatnya bertahan hidup hingga hari ini. Kita akan menyelami apa yang para penderita depresi rasakan dan bagaimana cara membantu mereka (atau bahkan diri sendiri) menjadi lebih baik.',
            'author' => 'Matt Haig',
            'cover' => 'alasan.jpg'
        ]);

        Book::create([
            'title' => 'Daun Yang Jatuh Tak Pernah Membenci Angin',
            'slug' => 'daun-yang-jatuh-tak-pernah-membenci-angin',
            'description' => 'Dia bagai malaikat bagi keluarga kami. Merengkuh aku, adikku, dan Ibu dari kehidupan jalanan yang miskin dan nestapa. Memberikan makan, tempat berteduh, sekolah, dan janji masa depan yang lebih baik. Dia sungguh bagai malaikat bagi keluarga kami. Memberikan kasih sayang, perhatian, dan teladan tanpa mengharap budi sekali pun. Dan lihatlah, aku membalas itu semua dengan membiarkan mekar perasaan ini. Ibu benar, tak layak aku mencintai malaikat keluarga kami. Tak pantas. Maafkan aku, Ibu. Perasaan kagum, terpesona, atau entahlah itu muncul tak tertahankan bahkan sejak rambutku masih dikepang dua. Sekarang, ketika aku tahu dia boleh jadi tidak pernah menganggapku lebih dari seorang adik yang tidak tahu diri, biarlah... Biarlah aku luruh ke bumi seperti sehelai daun... daun yang tidak pernah membenci angin meski harus terenggutkan dari tangkai pohonnya.',
            'author' => 'Tere Liye',
            'cover' => 'daunjatuh.jpg'
        ]);

        Book::create([
            'title' => 'Negeri 5 Menara',
            'slug' => 'negeri-5-menara',
            'description' => 'Alif lahir di pinggir Danau Maninjau dan tidak pernah menginjak tanah di luar ranah Minangkabau. Masa kecilnya adalah berburu durian runtuh di rimba Bukit Barisan, bermain bola di sawah berlumpur dan tentu mandi berkecipak di air biru Danau Maninjau. Tiba-tiba saja dia harus naik bus tiga hari tiga malam melintasi punggung Sumatera dan Jawa menuju sebuah desa di pelosok Jawa Timur. Ibunya ingin dia menjadi Buya Hamka walau Alif ingin menjadi Habibie. Dengan setengah hati dia mengikuti perintah Ibunya: belajar di pondok. Di kelas hari pertamanya di Pondok Madani (PM), Alif terkesima dengan “mantera” sakti man jadda wajada. Siapa yang bersungguh-sungguh pasti sukses. Dia terheran-heran mendengar komentator sepakbola berbahasa Arab, anak menggigau dalam bahasa Inggris, merinding mendengar ribuan orang melagukan Syair Abu Nawas dan terkesan melihat pondoknya setiap pagi seperti melayang di udara. Dipersatukan oleh hukuman jewer berantai, Alif berteman dekat dengan Raja dari Medan, Said dari Surabaya, Dulmajid dari Sumenep, Atang dari Bandung dan Baso dari Gowa. Di bawah menara masjid yang menjulang, mereka berenam kerap menunggu maghrib sambil menatap awan lembayung yang berarak pulang ke ufuk. Di mata belia mereka, awan-awan itu menjelma menjadi negara dan benua impian masing-masing. Kemana impian jiwa muda ini membawa mereka? Mereka tidak tahu. Yang mereka tahu adalah: Jangan pernah remehkan impian, walau setinggi apa pun. Tuhan sungguh Maha Mendengar. Bagaimana perjalanan mereka ke ujung dunia ini dimulai? Siapa horor nomor satu mereka? Apa pengalaman mendebarkan di tengah malam buta di sebelah sungai tempat jin buang anak? Bagaimana sampai ada yang kasak-kusuk menjadi mata-mata misterius? Siapa Princess of Madani yang mereka kejar-kejar? Kenapa mereka harus botak berkilat-kilat? Bagaimana sampai Icuk Sugiarto, Arnold Schwarzenegger, Ibnu Rusyd, bahkan Maradona sampai akhirnya ikut campur? Ikuti perjalanan hidup yang inspiratif ini langsung dari mata para pelakunya. Negeri Lima Menara adalah buku pertama dari sebuah trilogi.',
            'author' => 'Ahmad Fuadi',
            'cover' => 'negeri.jpg'
        ]);

        Book::create([
            'title' => 'The House with Chicken Legs',
            'slug' => 'the-house-with-chicken-legs',
            'description' => "All 12-year-old Marinka wants is a friend. A real friend. Not like her house with chicken legs. Sure, the house can play games like tag and hide-and-seek, but Marinka longs for a human companion. Someone she can talk to and share secrets with. But that's tough when your grandmother is a Yaga, a guardian who guides the dead into the afterlife. It's even harder when you live in a house that wanders all over the world . . . carrying you with it. Even worse, Marinka is being trained to be a Yaga. That means no school, no parties--and no playmates that stick around for more than a day. So when Marinka stumbles across the chance to make a real friend, she breaks all the rules . . . with devastating consequences. Her beloved grandmother mysteriously disappears, and it's up to Marinka to find her--even if it means making a dangerous journey to the afterlife.",
            'author' => 'Sophie Anderson',
            'cover' => 'thwcl.jpg'
        ]);

        Book::create([
            'title' => "Midsummer's Mayhem",
            'slug' => "midsummers-mayhem",
            'description' => "Can Mimi undo the mayhem caused by her baking in this contemporary-fantasy retelling of Shakespeare's A Midsummer Night's Dream?Eleven-year-old Mimi Mackson comes from a big Indian American family: Dad's a renowned food writer, Mom's a successful businesswoman, and her three older siblings all have their own respective accomplishments. It's easy to feel invisible in such an impressive family, but Mimi's dream of proving she's not the least-talented member of her family seems possible when she discovers a contest at the new bakery in town. Plus, it'll start her on the path to becoming a celebrity chef like her culinary idol, Puffy Fay. But when Mimi's dad returns from a business trip, he's mysteriously lost his highly honed sense of taste. Without his help, Mimi will never be able to bake something impressive enough to propel her to gastronomic fame. Drawn into the woods behind her house by a strangely familiar song, Mimi meets Vik, a boy who brings her to parts of the forest she's never seen. Who knew there were banyan trees and wild boars in Massachusetts? Together they discover exotic ingredients and bake them into delectable and enchanting treats. But as her dad acts stranger every day, and her siblings' romantic entanglements cause trouble in their town, Mimi begins to wonder whether the ingredients she and Vik found are somehow the cause of it all. She needs to use her skills, deductive and epicurean, to uncover what's happened. In the process, she learns that in life, as in baking, not everything is sweet. . . .",
            'author' => 'Rajani LaRocca',
            'cover' => 'midsummers.jpg'
        ]);

        Book::create([
            'title' => 'Rumah Ilalang',
            'slug' => 'rumah-ilalang',
            'description' => 'Selepas kematian Tabita, Tania tampak begitu terpukul. Jenazah Tabita tak bisa dimakamkan. Ia ditolak di mana pun. Tidak di pemakaman muslim, maupun hanya untuk mendapatkan pelayanan kematian dari gereja. Kolom agama di KTP Tabita memang Islam, tapi di tahun-tahun akhir hidupnya, banyak orang yang melihat Tabita rutin mengikuti misa Minggu. Pelayanan kematian itu tak dapat diberikan karena--meski Tabita rajin mengikuti misa, tak sekalipun ia terdaftar sebagai warga jemaat. Terlebih, ia adalah seorang waria.Usaha Tania memperjuangkan hak-hak kemanusiaan bagi sahabatnya untuk dimakamkan dengan layak, mempertemukannya pada kenyataan yang lain. Tentang latar belakang keluarganya, tentang keluarga Gosvino—pria seminarian yang mati-matian dicintai Tabita, tentang kelamnya rasa iri di antara para waria dan tentang dunia yang semakin tak manusiawi. Semuanya seperti rumah yang dibangun dari ilalang. Rapuh. Mudah terbakar dan diterbangkan angin.',
            'author' => 'Strebby Julionatan',
            'cover' => 'rumah.jpg'
        ]);

        Book::create([
            'title' => 'Makan Kapal Selam',
            'slug' => 'makan-kapal-selam',
            'description' => 'Kreativitas berbahasa bangsa Indonesia sangat luar biasa. Itu bisa dilihat dari nama-nama penganan yang yang dikonsumsi oleh anak-anak sampai orang dewasa. Kita pun tidak asing dengan kue molen, permen endhok cecak, permen karet, kacang atom, dan kue putri salju. Kulinernya lebih gila lagi. Ada tong seng, sego kucing, ganjel rel, sayur paku, oseng-oseng mercon, bakso granat, bakso rudal, dan kapal selam. Khusus yang terakhir adalah nama empek-empek. Nama-nama binatang pun tak luput dari kreativitas berbahasa bangsa Indonesia. Maka kita pun mengenal istilah kutu loncat, kutu buku, bajing loncat, raja singa, macan ompong, kabar burung, buaya darat, dan roti buaya. Masing-masing istilah itu memiliki arti khusus. Ada yang positif artinya, tapi juga ada yang bermakna negatif. Semua fenomena bahasa itu, juga tema-tema yang lain, dibahas dengan lugas oleh Samsudin Adlawi dalam buku ini. Bahasa yang digunakan cukup sederhana, sehingga memudahkan pembaca mencerna tulisan yang disajikan. Bukan hanya akan mendapatkan wawasan kebahasaan, pembaca juga akan terhibur oleh humor yang terselip di setiap tema dalam buku ini. Bahkan, baru membaca judulnya saja ‘’Makan Kapal Selam’’, pembaca sudah dipaksa tersenyum.',
            'author' => 'Samsudin Adlawi',
            'cover' => 'makan.jpg'
        ]);

        Book::create([
            'title' => 'Pulang-Pergi',
            'slug' => 'pulang-pergi',
            'description' => '"Ada jodoh yang ditemukan lewat tatapan pertama. Ada persahabatan yang diawali lewat sapa hangat. Bagaimana jika takdir bersama ternyata, diawali dengan pertarungan mematikan? Lantas semua cerita berkelindan dengan, pengejaran demi pengejaran mencari jawaban? Pulang-Pergi."',
            'author' => 'Tere Liye',
            'cover' => 'pp.jpg'
        ]);

        Book::create([
            'title' => 'Alster Lake',
            'slug' => 'alster-lake',
            'description' => 'Cerita ini berawal dari kisah seorang perempuan bernama Alea yang meninggalkan bukunya di perpustakaan, yang kemudian seseorang menemukan buku itu. Alea menceritakan betapa sukanya ia pada karakter fiksi di buku Alster Lake karya Dean Bjorn. Namun ternyata seseorang yang mengembalikan buku itu adalah penulisnya sendiri.
            Memiliki ketertarikan yang sama tentang Jerman, Dean Bjorn jatuh cinta untuk pertama kalinya pada pembacanya itu. Ia menyatakan cintanya ketika mereka sedang berlibur bersama di Hamburg, di tepi Alster Lake, menggunakan surat cinta. Tentu saja Alea tidak menolak, karena dari awal ia sudah jatuh cinta pada karakter fiksi yang dibuat oleh Dean, yang ternyata karakter itu adalah dirinya sendiri
            Seiring berjalannya waktu mereka menjalin hubungan, ada satu masalah yang membuat mereka tak lama kemudian mengakhiri hubungan itu. Dean yang hilang kabar karena sibuk mementingkan studinya ke Jerman, sedangkan Alea yang tidak memberinya waktu untuk menjelaskan apa yang terjadi sebenarnya.
            Mereka kembali menjadi dua orang asing. Tiba-tiba saat itu Alea menemukan judul buku yang tidak asing baginya, Alster Lake 2. Dimana buku itu menceritakan tentang seorang perempuan yang berarti bagi Dean. ketika membaca halaman terakhir buku itu, ia merasa buku itu tertuju pada dirnya. Dengan keberaniannya, ia berangkat ke Jerman dan mencari sosok laki-laki itu untuk menyelesaikan semuanya.',
            'author' => 'Auryn Vientania',
            'cover' => 'alster.jpg'
        ]);
        // Add more books if needed
    }
}
