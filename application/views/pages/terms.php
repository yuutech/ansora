<style>
    .about1 {
        background-color: #244991;
        border-radius: 20px;
        border-radius: 20px;
    }

    .btn-term {
        border: 0;
        font-size: 18px;
        border-radius: 20px;
        width: 250px;
        height: 40px;
        background-color: #244991;
        color: white;
        outline: none !important;
    }

    .btn-term:hover {
        border: 1px solid #fff;
    }

    .active>.btn-term {
        font-weight: bold;
    }

    .nav {
        display: initial;
    }
    
    ol {
    list-style-type: none;
    counter-reset: item;
    margin: 0;
    padding: 0;
    }

    ol > li {
    display: table;
    counter-increment: item;
    margin-bottom: 0.6em;
    }

    ol > li:before {
    content: counters(item, ".") ". ";
    display: table-cell;
    padding-right: 0.6em;    
    }

    li ol > li {
    margin: 0;
    }

    li ol > li:before {
    content: counters(item, ".") " ";
    }

    @media only screen and (max-width: 1000px) {
        .btn-term {
            width: 100%;
            margin-top: 10px;
        }
    }
</style>

<!-- content -->
<div class="container">


    <div class="row py-4">

        <div class="col-md-3 logo-about text-center nav">
            <a data-toggle="tab" href="#nav-terms" class="active" role="tab"><button class="btn-term mb-2">Syarat dan Ketentuan</button></a>
            <a data-toggle="tab" href="#nav-kebijakan" role="tab"><button class="btn-term mb-2">Kebijakan Privasi</button></a>
            <a data-toggle="tab" href="#nav-faq" role="tab"><button class="btn-term mb-2">FAQ</button></a>
            <a href="<?= base_url(); ?>"><button class="btn-term mb-2"><i class="fa fa-angle-left"></i> Kembali</button></a>
        </div>

        <div class="col-md-9 ">
            <div class="card about1 tab-content">
                <div class="card-body text-white mb-5 tab-pane fade in active show" id="nav-terms">
                    <h1 class="font-weight-bold text-center mb-3">Syarat dan Ketentuan</h1>
                    <ol>
                        <strong><li>
                            <p>Kesepakatan Syarat dan Ketentuan</p></strong>
                            <ol>
                                <li>Syarat dan Ketentuan ini berlaku pada situs web komunitas Animasi Solo Raya (“ANSORA”) yang beralamat pada ansora.id dan semua situs web terkait yang tertaut pada ansora.id (secara bersama-sama disebut “Situs”). Situs ini dimiliki dan dioperasikan oleh ANSORA</li>
                                <li>Dengan mengakses dan menggunakan Situs dan segala layanan yang merupakan bagian dari Situs (“Layanan”), berarti melahirkan kesepakatan antara Anda dan ANSORA. Anda dianggap telah memahami dan menyatakan setuju untuk terikat pada ketentuan yang berlaku. ANSORA menghimbau agar Anda membaca Syarat dan Ketentuan ini dengan seksama, ANSORA berhak sewaktu-waktu mengubah Syarat dan Ketentuan ini, oleh karena itu Anda dihimbau untuk mengakses secara berkala untuk mengetahui perubahannya (apabila ada).</li>
                                
                            </ol>
                        </li>
                        <strong><li>
                            <p>Privasi</p></strong>
                            <ol>
                                <li>ANSORA berkomitmen untuk melindungi privasi Anda. Dengan mengirimkan data pribadi apa pun untuk penggunaan Layanan, Anda menyetujui Kebijakan privasi yang dimasukkan ke dalam dan membentuk bagian dari Syarat dan Ketentuan ini.</li>
                            </ol>
                        </li>
                        <strong><li>
                            <p>Pendaftaran dan Keamanan Akun</p></strong>
                            <ol>
                                <li>Layanan tertentu yang ditawarkan di Situs mungkin mengharuskan Anda untuk mendaftarkan akun (“Akun”). Anda setuju untuk memberikan informasi lengkap tentang diri Anda saat mendaftar untuk suatu Akun. Anda setuju bahwa Anda tidak diperbolehkan melakukan hal berikut ketika mendaftarkan akun:
                                    <ol>
                                        <li>Memilih atau menggunakan nama orang lain sebagai nama pengguna dengan tujuan menyamar sebagai orang tersebut;</li>
                                        <li>Memilih atau menggunakan nama yang merupakan subjek dari hak apa pun milik orang lain tanpa izin yang tepat sebagai nama pengguna</li>
                                        <li>Memilih atau menggunakan nama pengguna yang tidak sopan, vulgar atau cabul</li>
                                    </ol>
                                </li>
                                <li>3Anda sepenuhnya bertanggung jawab untuk menjaga kerahasiaan informasi yang Anda miliki untuk Akun Anda, termasuk nama pengguna, kata sandi, dan semua aktivitas lain yang terkait dengan Akun Anda. Anda harus segera memberi tahu kami apabila ada penggunaan Akun Anda yang tidak sah atau pelanggaran keamanan lainnya.</li>
                                <li>Dengan melakukan pendaftaran Akun, Anda atau kelompok yang Anda wakili dengan otomatis mengajukan secara menyeluruh untuk menjadi anggota dari ANSORA</li>
                                <li>Pendaftaran Akun akan diikuti dengan peninjauan oleh pengelola ANSORA melalui kontak yang Anda berikan melalui formulir pendaftaran</li>
                                <li>Setiap pendaftaran untuk Akun Individu hanya untuk satu pengguna. Anda tidak diizinkan membagi login Akun Anda atau memberikan kredensial login Akun Anda kepada orang lain. Kami dapat membatalkan atau menangguhkan akses Anda ke Akun Anda dan Layanan jika Anda membagikan kredensial login Akun Anda kepada siapa pun.</li>
                                <li>Setiap pendaftaran untuk Akun Kelompok (Studio/Lembaga Pendidikan/Komunitas) hanya untuk satu pengguna. Anda diizinkan membagi login Akun atau memberikan kredensial login Akun Anda kepada anggota kelompok Anda yang Anda percaya. Penganggung jawab Akun Kelompok (“Narahubung”) bertanggung jawab kepada Pengurus ANSORA atas segala aktivitas yang dilakukan oleh Akun Kelompok.</li>
                            </ol>
                        </li>
                        <strong><li>
                            <p>Tautan ke Situs dan situs web lainnya</p></strong>
                            <ol>
                                <li>Setiap situs web atau perangkat lain yang menautkan ke Situs dilarang:
                                    <ol>
                                        <li>Mereplikasi Konten Situs</li>
                                        <li>Menggunakan browser atau lingkungan perbatasan di sekitar Konten</li>
                                        <li>Menyiratkan bahwa ANSORA atau afiliasi ANSORA mendukungnya atau produk dan layanannya</li>
                                        <li>Salah menggambarkan keadaan fakta termasuk hubungannya dengan ANSORA atau afiliasinya, dan</li>
                                        <li>Menggunakan tanda atau logo ANSORA atau afiliasinya tanpa persetujuan ANSORA.</li>
                                    </ol>
                                </li>
                                <li>5.2.	Situs dapat berisi tautan web ke situs web pihak ketiga lainnya. Kami tidak memantau atau meninjau konten situs web pihak ketiga tersebut. Pendapat yang diungkapkan atau materi yang muncul di situs web tersebut tidak serta-merta dibagikan atau didukung oleh ANSORA dan ANSORA tidak boleh dianggap sebagai penerbit pendapat atau materi tersebut. Anda mengakui dan menyetujui bahwa ANSORA tidak akan bertanggung jawab atau berkewajiban, secara langsung atau tidak langsung, untuk setiap kerusakan atau kehilangan yang disebabkan atau diduga disebabkan oleh atau sehubungan dengan penggunaan atau kepercayaan dari konten, barang dan layanan yang disediakan pada atau melalui situs web pihak ketiga tersebut</li>
                            </ol>
                        </li>
                        <strong><li>
                            <p>Konten yang Dikirimkan atau Diunggah ke Situs</li></p></strong>
                            <ol>
                                <li>ANSORA tidak mengklaim kepemilikan atas Konten yang Anda kirimkan atau sediakan (yaitu Konten Pengguna) ketika menggunakan Layanan yang disediakan Situs. Namun, Anda setuju untuk memberikan ANSORA, afiliasinya, dan penerusnya, serta memberikan lisensi di seluruh dunia, non-eksklusif, abadi, bebas royalti, dibayar penuh, sub-lisensi dan dapat ditransfer (“Lisensi”) untuk menggunakan, mengedit, memodifikasi, memotong, mengagregasi, mereproduksi, mendistribusikan, menyiapkan karya turunan dari, menampilkan, melakukan, dan jika tidak sepenuhnya mengeksploitasi Konten Pengguna tersebut.</li>
                                <li>Untuk menghindari keraguan, Lisensi yang diberikan kepada ANSORA harus mencakup hak untuk mendistribusikan, menampilkan, melakukan dan menggunakan Konten Pengguna tersebut sehubungan dengan materi yang disediakan untuk ANSORA oleh sponsor ANSORA ("Sponsor ANSORA" ), dan Anda tidak berhak atas remunerasi untuk penggunaan tersebut.</li>
                                <li>Anda setuju untuk memberikan kepada setiap pengguna Situs dan / atau Layanan lisensi non-eksklusif, abadi, bebas royalti dan dibayar penuh ("Lisensi Pribadi") untuk mengakses Konten Pengguna Anda melalui Situs dan / atau Layanan , semata-mata untuk penggunaan pribadi mereka. Untuk menghindari keraguan, Lisensi Pribadi yang diberikan kepada pengguna tersebut tidak mempengaruhi hak kepemilikan Anda dan hak Anda untuk memberikan lisensi tambahan atas Konten Pengguna Anda.</li>
                                <li>Anda menyatakan dan menjamin bahwa:
                                    <ol>
                                        <li>semua Konten Pengguna yang disediakan oleh Anda akurat, lengkap, terkini, dan sesuai dengan semua hukum, peraturan, dan regulasi yang berlaku; dan</li>
                                        <li>Anda memiliki semua hak untuk memberikan Lisensi tersebut kepada kami tanpa melanggar atau melanggar hak pihak ketiga, termasuk tanpa batasan, hak privasi, hak publisitas, hak cipta, merek dagang, hak kontrak, atau kekayaan intelektual atau hak kepemilikan lainnya.</li>
                                    </ol>
                                </li>
                            </ol>
                        </li>
                        <strong><li>
                            <p>Disclaimer</p></strong>
                            <ol>
                                <li>ANSORA tidak menjanjikan atau membuat jaminan tentang ketersediaan Konten dan Layanan di Situs atau bahwa Konten dan Layanan di Situs akan bebas dari kesalahan atau tanpa gangguan, bebas dari virus atau malware, atau bahwa segala cacat akan dikoreksi atau bahwa penggunaan Anda atas Situs dan Layanan akan memberikan hasil spesifik yang memenuhi kebutuhan Anda.</li>
                                <li>ANSORA berhak untuk menghapus, mengedit, memodifikasi atau memanipulasi Konten apa pun dan untuk menghapus atau memblokir Konten apa pun dari Layanan tanpa pemberitahuan kepada Anda karena alasan apa pun atau tanpa alasan sama sekali.</li>
                            </ol>
                        </li>
                        <strong><li>
                            <p>Pengungkapan dan Pengakhiran</p></strong>
                            <ol>
                                <li>8.1.	Anda mengakui dan setuju bahwa ANSORA dapat mengakses, menyimpan, dan mengungkapkan informasi Akun Anda jika diharuskan oleh hukum atau dengan itikad baik bahwa akses, pelestarian, atau pengungkapan semacam itu secara wajar diperlukan untuk:
                                    <ol>
                                        <li>menegakkan Syarat dan Ketentuan ini;</li>
                                        <li>menanggapi klaim bahwa Konten Pengguna Anda melanggar hak orang lain;</li>
                                        <li>melindungi hak, properti, atau keselamatan pribadi karyawan ANSORA, pengguna Situs dan Layanan dan publik; atau</li>
                                        <li>mematuhi hukum, peraturan, atau proses hukum apa pun yang berlaku.</li>
                                    </ol>
                                </li>
                                <li>Anda dapat mengakhiri Akun Anda dan akses ke Layanan dengan mengirimkan permintaan penghentian tersebut ke ANSORA ke alamat email berikut, pengurus@ansora.id</li>
                                <li>Anda setuju bahwa ANSORA dapat, atas kebijakannya sendiri dan tanpa pemberitahuan sebelumnya, membatasi akses Anda atau menangguhkan Akun Anda jika dianggap Anda telah melanggar Syarat dan Ketentuan ini atau hukum atau peraturan yang berlaku.</li>
                            </ol>
                        </li>
                        <strong><li>
                            <p>Batasan Tanggung Jawab</p></strong>

                            <p>Sejauh diizinkan oleh hukum yang berlaku, dalam keadaan apa pun ANSORA bertanggung jawab atas (i) segala kerusakan tidak langsung, insidental, khusus atau konsekuensial, termasuk tetapi tidak terbatas pada biaya pengadaan produk atau layanan pengganti, kehilangan laba atau pendapatan, atau hilangnya data atau penggunaan, yang ditimbulkan oleh Anda atau pihak ketiga mana pun, baik dalam suatu tindakan dalam kontrak atau gugatan atau lainnya, bahkan jika telah diberitahukan tentang kemungkinan dari kerusakan tersebut atau (ii) untuk kerusakan langsung apa pun yang melebihi Rp. 2.000.000,-.</p>
                        </li>
                        <strong><li>
                            <p>Ganti rugi</p></strong>

                            <p>Anda setuju untuk mengganti rugi, membela dan memegang ANSORA, afiliasinya dan perwakilannya masing-masing tidak berbahaya dari dan terhadap setiap dan semua kehilangan, kerusakan, pertanggungjawaban, tuntutan, tindakan, proses, tuntutan, kerusakan, penilaian, kewajiban, klaim, dan biaya (termasuk , tanpa batasan, biaya pengacara yang wajar, biaya ahli dan biaya pengadilan dan biaya investigasi dan penghargaan pertahanan dan penyelesaian) yang berkaitan dengan, yang timbul dari, atau sehubungan dengan penggunaan Anda atas Konten dan / atau Layanan di Situs</p>
                        </li>
                        <strong><li>
                            <p>Keterpisahan</p></strong>

                            <p>Jika ada ketentuan dalam Syarat dan Ketentuan ini yang dianggap tidak sah, ilegal atau tidak dapat diberlakukan, ketentuan lainnya dari Syarat dan Ketentuan ini akan tetap berlaku sepenuhnya.</p>
                        </li>
                        <strong><li>
                            <p>Keseluruhan Perjanjian</p></strong>

                            <p>Syarat dan Ketentuan ini merupakan keseluruhan perjanjian antara ANSORA dan Anda sehubungan dengan penggunaan Situs dan Layanan yang disebutkan di sini. Anda mungkin tunduk pada syarat dan ketentuan tambahan yang mungkin berlaku ketika Anda menggunakan Layanan.</p>
                        </li>
                        <strong><li>
                            <p>Peraturan Pemerintah</p></strong>

                            <p>Syarat dan Ketentuan ini dan setiap perselisihan, kontroversi atau klaim yang timbul dari atau sehubungan dengan itu akan diatur oleh dan ditafsirkan sesuai dengan hukum Indonesia dan ANSORA dan Anda dengan ini tunduk pada yurisdiksi non-eksklusif pengadilan Indonesia.</p>
                        </li>
                        <strong><li>
                            <p>Masukan dan Pertanyaan</p></strong>

                            <p>TIA ID menyambut umpan balik pada Situs dan Layanan yang diberikannya. Anda dapat mengirim umpan balik atau pertanyaan Anda melalui telepon, email, yang detailnya dapat ditemukan di Halaman Tentang kami di ansora.id.</p>
                            <small><em>(Terakhir diperbaharui 4 Juli  2020)</em></small>
                        </li>
                    </ol>
                </div>
                <div class="card-body text-white mb-5 tab-pane fade" id="nav-kebijakan">
                    <h1 class="font-weight-bold text-center mb-3">Kebijakan Privasi</h1>
                    <p>Kebijakan Privasi ini menetapkan bahwa ANSORA (“kami” atau “milik kami”)  dapat mengumpulkan, menggunakan, mengungkapkan atau memproses data pribadi Anda sesuai aturan hukum yang berlaku di Indonesia.</p>
                    <p>Kebijakan Privasi ini terkait dengan dan dianggap dimasukkan sebagai referensi, untuk menjadi bagian dari Syarat dan Ketentuan kami.</p>
                    <ol>
                        <Strong><li>Data Pribadi </Strong>
                        <ol>
                            <li>Sebagaimana digunakan dalam Kebijakan Privasi ini, “data pribadi” berarti data, baik benar maupun tidak, tentang individu maupun kelompok yang dapat diidentifikasi: (a) dari data itu; atau (b) dari data itu dan informasi lain yang kami miliki atau mungkin memiliki akses.</li>
                            <li>Bergantung pada sifat interaksi Anda dengan kami, pada Situs atau melalui Layanan apa pun yang kami berikan, jenis informasi yang dapat kami kumpulkan meliputi:
                                <ol>
                                    <li>Data pribadi dan informasi kontak. Kami dapat mengumpulkan informasi dengan pengenal pribadi termasuk nama dan informasi identifikasi Anda seperti informasi kontak seperti alamat Anda, alamat email atau nomor telepon, kebangsaan, jenis kelamin, tanggal lahir, status perkawinan, foto dan audio -visual lainnya. </li>
                                    <li>Detail pekerjaan. Kami dapat mengumpulkan informasi dari CV Anda sehubungan dengan pekerjaan Anda dan posisi lain yang dimiliki, riwayat pekerjaan, gaji, dan / atau tunjangan atau riwayat pendidikan.</li>
                                    <li>Perangkat dan Informasi Teknis. Kami mengumpulkan informasi spesifik perangkat dan informasi teknis lainnya tentang perangkat seluler atau komputer Anda seperti model perangkat keras, versi sistem operasi, tipe dan versi browser, alamat Internet Protocol (IP), pengidentifikasi iklan, pengidentifikasi aplikasi unik, pengidentifikasi perangkat unik, pengidentifikasi perangkat unik, tipe browser , bahasa, jaringan nirkabel, dan informasi jaringan seluler (termasuk nomor ponsel).</li>
                                    <li>Data Anonim lainnya. Kami dapat mengumpulkan informasi yang tidak terkait dengan atau ditautkan dengan data pribadi Anda dan tidak dapat digunakan untuk mengidentifikasi Anda atau orang lain (“Data Anonim”).</li>
                                </ol>
                            </li>
                            <li>Sebagian besar informasi akan dikumpulkan ketika Anda menggunakan Situs atau ketika Anda menggunakan Layanan. Namun, kami juga dapat menggunakan berbagai teknologi di Situs yang dapat menyebabkan informasi dikumpulkan secara otomatis oleh kami atau dari sumber lain seperti iklan, sub-kontraktor dalam layanan teknis dan pembayaran, penyedia analisis, penyedia informasi pencarian dan milis. Informasi ini tidak secara umum, tetapi mungkin, berisi data pribadi Anda. Secara khusus, informasi kemungkinan dikumpulkan sebagai berikut:
                                <ol>
                                    <li>Suar web. Suar web (juga dikenal sebagai "clear gifs" dan "pixel tags") adalah gambar grafik transparan kecil yang sering digunakan bersama dengan cookie untuk lebih mempersonalisasi Layanan untuk pengguna kami, mengumpulkan serangkaian informasi terbatas tentang pengunjung kami, dan beriklan ke pengguna kami.</li>
                                    <li>Analisis web. Analisis Web adalah metode untuk mengumpulkan dan menilai perilaku pengguna di Situs. Ini termasuk analisis pola lalu lintas untuk, misalnya, untuk menentukan frekuensi kunjungan ke bagian tertentu dari situs web atau aplikasi seluler, atau untuk mengetahui informasi dan layanan apa yang paling diminati pengguna. Kami juga dapat menggunakan suar web dalam komunikasi email untuk memahami perilaku pengguna kami, seperti apakah email telah dibuka atau ditindaklanjuti.</li>
                                </ol>
                            </li>
                        </ol>
                        </li>
                        <strong><li>Pengumpulan, Penggunaan dan Pengungkapan Data Pribadi</strong>
                            <ol>
                                <li>Karena ada banyak keadaan di mana kami dapat mengumpulkan informasi, kami akan berusaha untuk memastikan bahwa Anda selalu mengetahui informasi yang dikumpulkan, khususnya oleh pihak ketiga. Kami umumnya tidak mengumpulkan data pribadi Anda kecuali (a) itu diberikan kepada kami secara sukarela oleh Anda secara langsung atau melalui pihak ketiga yang telah diberi wewenang oleh Anda untuk mengungkapkan data pribadi Anda kepada kami ("perwakilan resmi" Anda, misalnya Facebook atau platform digital selain ANSORA lainnya) setelah (i) Anda (atau perwakilan resmi Anda) diberitahu tentang tujuan pengumpulan data, dan (ii) Anda (atau perwakilan resmi Anda) telah memberikan persetujuan untuk pengumpulan dan penggunaan data pribadi Anda untuk tujuan tersebut, atau (b) pengumpulan dan penggunaan data pribadi tanpa persetujuan diizinkan atau diminta oleh aturan hukum. Kami akan meminta persetujuan Anda sebelum mengumpulkan data pribadi tambahan dan sebelum menggunakan data pribadi Anda untuk tujuan yang belum diberitahukan kepada Anda (kecuali jika diizinkan atau diizinkan oleh hukum).</li>
                                <li>Kami dapat mengumpulkan dan menggunakan data pribadi Anda untuk salah satu atau semua tujuan berikut:
                                    <ol>
                                        <li>melakukan kewajiban dalam perjalanan atau sehubungan dengan ketentuan Layanan kami yang diminta oleh Anda;</li>
                                        <li>memverifikasi identitas Anda;
                                        menanggapi, menangani, dan memproses pertanyaan, permintaan, aplikasi, keluhan, dan umpan balik dari Anda;
                                        </li>
                                        <li>mendeteksi pola penggunaan;</li>
                                        <li>pemecahan masalah macet yang terkait dengan perangkat keras dan lunak yang digunakan untuk mengakses Situs dan Layanan;</li>
                                        <li>menganalisis tren;</li>
                                        <li>mengelola situs;</li>
                                        <li>melacak pergerakan pengguna; dan</li>
                                        <li>mengumpulkan informasi demografis luas untuk penggunaan agregat dari Layanan;</li>
                                        <li>memproses pembayaran atau transaksi kredit;</li>
                                        <li>mengirimi Anda informasi pemasaran tentang Layanan atas nama kami sendiri dan melalui sponsor kami atau penyedia layanan pihak ketiga lainnya, termasuk memberi tahu Anda tentang iklan, acara pemasaran, inisiatif, dan promosi lainnya; mematuhi hukum, peraturan, kode praktik, pedoman yang berlaku , atau aturan, atau untuk membantu dalam penegakan hukum dan investigasi yang dilakukan oleh otoritas pemerintah dan / atau regulator;</li>
                                        <li>tujuan lain apa pun yang telah Anda berikan informasinya;</li>
                                        <li>mentransmisikan ke pihak ketiga yang tidak terafiliasi termasuk penyedia dan agen layanan pihak ketiga kami, dan otoritas pemerintah dan / atau regulator yang relevan, baik di Indonesia atau di luar negeri, untuk tujuan yang disebutkan di atas; dan</li>
                                        <li>segala keperluan bisnis insidental lainnya yang terkait atau sehubungan dengan hal di atas.</li>
                                    </ol>
                                </li>
                                <li>Data pribadi Anda juga dapat dianonimkan untuk digunakan oleh ANSORA dan afiliasinya untuk tujuan lain.</li>
                                <li>Mungkin perlu bagi kami untuk mengungkapkan data pribadi Anda kepada afiliasi kami atau kepada pihak ketiga dengan cara yang sesuai dengan aturan hukum untuk melaksanakan tujuan yang disebutkan di atas. Kami dapat mengungkapkan atau berbagi data pribadi dengan pihak-pihak yang menyediakan layanan yang diperlukan kepada kami, seperti untuk memproses kegiatan seperti verifikasi, hosting situs web, analisis data, dan pemrosesan pembayaran. Kami dapat mengungkapkan data pribadi Anda dalam kondisi berikut
                                    <ol>
                                        <li>di mana pengungkapan tersebut diperlukan untuk melakukan kewajiban dalam perjalanan atau sehubungan dengan ketentuan Layanan kami yang diminta oleh Anda;</li>
                                        <li>konsultan dan penasihat profesional kami (mis. firma akuntansi, firma audit, firma hukum dan / atau firma penasehat profesional lainnya) yang menyimpan catatan kami sesuai dengan persyaratan hukum;</li>
                                        <li>badan pemerintah, regulator atau penegak hukum yang memiliki hak hukum untuk meminta data pribadi Anda, sebagai tanggapan atas permintaan hukum seperti perintah pengadilan, untuk menyelidiki atau melaporkan kegiatan ilegal, atau untuk menegakkan hak-hak kami atau membela klaim;</li>
                                        <li>perusahaan terafiliasi atau terkait kami dan / atau pihak ketiga kepada siapa kami dapat menjual, melepaskan, mengalihkan, menugaskan, berbagi atau terlibat dalam transaksi yang melibatkan, sebagian atau semua aset kami (yang mungkin termasuk data pribadi Anda); atau</li>
                                        <li>penyedia layanan pihak ketiga, agen dan organisasi lain yang telah kami libatkan untuk melakukan salah satu fungsi yang tercantum dalam klausa 2.2 di atas untuk kami.</li>
                                    </ol>
                                </li>
                            </ol>
                        </li>
                        <strong><li>Penarikan Persetujuan Anda</strong>
                            <ol>
                                <li>Persetujuan yang Anda berikan untuk pengumpulan, penggunaan, dan pengungkapan data pribadi Anda akan tetap berlaku sampai saat itu ditarik oleh Anda secara tertulis. Anda dapat menarik persetujuan dan meminta kami untuk berhenti menggunakan dan / atau mengungkapkan data pribadi Anda untuk salah satu atau semua tujuan yang tercantum di atas dengan mengirimkan permintaan Anda secara tertulis atau melalui email ke Pengurus ANSORA di perincian kontak yang disediakan dalam klausul 9.1 di bawah ini. </li>
                                <li>Setelah menerima permintaan tertulis Anda untuk menarik persetujuan Anda, kami mungkin memerlukan waktu yang masuk akal (tergantung pada kompleksitas permintaan dan dampaknya pada hubungan kami dengan Anda) agar permintaan Anda diproses dan bagi kami untuk memberi tahu Anda tentang konsekuensinya. dari kami mengakses hal yang sama, termasuk segala konsekuensi hukum yang dapat mempengaruhi hak dan kewajiban Anda kepada kami. Secara umum, kami akan berupaya memproses permintaan Anda dalam waktu sepuluh (10) hari kerja sejak menerimanya.</li>
                                <li>Sementara kami menghormati keputusan Anda untuk menarik persetujuan Anda, harap dicatat bahwa tergantung pada sifat dan ruang lingkup permintaan Anda, kami mungkin tidak berada dalam posisi untuk terus memberikan Layanan kami kepada Anda dan kami akan, dalam keadaan seperti itu, memberi tahu Anda sebelum menyelesaikan pemrosesan permintaan Anda. Jika Anda memutuskan untuk membatalkan penarikan persetujuan Anda, silakan beri tahu kami secara tertulis dengan cara yang dijelaskan dalam klausul 9.1 di bawah ini.</li>
                                <li>Harap dicatat bahwa persetujuan penarikan tidak mempengaruhi hak kami untuk terus mengumpulkan, menggunakan, dan mengungkapkan data pribadi di mana pengumpulan, penggunaan, dan pengungkapan tanpa izin seperti itu diizinkan atau diharuskan oleh hukum yang berlaku.</li>
                            </ol>
                        </li>
                        <strong><li>Akses Menuju dan Koreksi Data Pribadi</strong>
                            <ol>
                                <li>Anda dapat meminta akses atau mengoreksi data pribadi yang kami miliki tentang Anda. Anda juga dapat meminta informasi tentang cara kami menggunakan, memproses, atau mengungkapkan data pribadi Anda. Silakan kirimkan permintaan Anda secara tertulis atau melalui email ke Pengurus ANSORA di perincian kontak yang disediakan dalam klausul 9.1 di bawah ini.</li>
                                <li>Kami dapat mengenakan biaya yang wajar untuk memproses permintaan Anda untuk akses. Jika demikian, kami akan memberi tahu Anda tentang biaya tersebut sebelum memproses permintaan Anda.</li>
                                <li>Kami akan menanggapi permintaan Anda sesegera mungkin. Jika kami tidak dapat menanggapi permintaan Anda dalam waktu tiga puluh (30) hari setelah menerima permintaan Anda, kami akan memberi tahu Anda secara tertulis dalam waktu tiga puluh (30) hari dari waktu tersebut di mana kami akan dapat menanggapi permintaan Anda. Jika kami tidak dapat memberikan data pribadi apa pun kepada Anda atau untuk melakukan koreksi yang diminta oleh Anda, kami biasanya akan memberi tahu Anda alasan mengapa kami tidak dapat melakukannya (kecuali jika kami tidak diharuskan melakukannya berdasarkan hukum yang berlaku).</li>
                            </ol>
                        </li>
                        <strong><li>Perlindungan Data Pribadi</strong>
                            <ol>
                                <li>Kami mengambil semua tindakan pencegahan yang sesuai untuk melindungi data pribadi Anda dari akses, pengumpulan, penggunaan, pengungkapan, penyalinan, modifikasi, pembuangan, atau risiko serupa yang tidak sah. Contoh langkah-langkah yang telah kami terapkan meliputi enkripsi, filter privasi dan perangkat lunak antivirus terbaru untuk melindungi dan mengamankan semua penyimpanan dan transmisi data pribadi Anda.</li>
                                <li>Anda harus menyadari, bagaimanapun, bahwa tidak ada metode transmisi melalui Internet dan metode penyimpanan elektronik yang sepenuhnya aman. Anda memahami bahwa pesan atau informasi apa pun yang Anda kirim, kirimkan, atau unggah ke Situs dapat dibaca atau dicegat oleh orang lain, bahkan jika ada pemberitahuan khusus bahwa transmisi tertentu dienkripsi. Meskipun keamanan tidak dapat dijamin, kami berusaha untuk melindungi keamanan data pribadi Anda dengan terus-menerus meninjau dan meningkatkan langkah-langkah keamanan kami. Namun, kami tidak dapat menerima tanggung jawab atas penyalahgunaan atau kehilangan, atau akses tidak sah ke data pribadi Anda.</li>
                            </ol>
                        </li>
                        <strong><li>Disclaimer</strong>
                            <p>Sejauh diizinkan oleh hukum, kami tidak akan bertanggung jawab dalam hal apa pun atas kerusakan khusus, hukuman, tidak langsung, insidental, atau konsekuensial dalam bentuk apa pun atau atas hilangnya reputasi atau niat baik, baik berdasarkan kontrak, kesalahan (termasuk kelalaian), keadilan, tanggung jawab yang ketat, ketetapan hukum atau lainnya, yang diderita sebagai akibat dari penggunaan, akses atau pengungkapan data pribadi Anda yang tidak sah atau tidak sengaja.</p>
                        </li>
                        <strong><li>Akurasi Data Pribadi</strong><p>
                            Kami secara umum mengandalkan data pribadi yang Anda berikan (atau perwakilan resmi Anda). Untuk memastikan bahwa data pribadi Anda terkini, lengkap dan akurat, harap perbarui kami jika ada perubahan pada data pribadi Anda dengan memberi tahu Pengurus ANSORA secara tertulis atau melalui email di perincian kontak yang disediakan dalam klausul 9.1 di bawah ini.
                        </p></li>
                        <strong><li>Retensi Data Pribadi</strong>
                            <ol>
                                <li>Kami dapat menyimpan data pribadi Anda selama diperlukan untuk memenuhi tujuan pengumpulannya, atau sebagaimana diminta atau diizinkan oleh hukum yang berlaku.</li>
                                <li>Kami akan berhenti menyimpan data pribadi Anda, atau menghapus sarana yang dengannya data dapat dikaitkan dengan Anda, segera setelah penyimpanan tersebut dianggap tidak lagi berfungsi untuk tujuan pengumpulan data pribadi, dan tidak lagi diperlukan untuk tujuan hukum atau bisnis.</li>
                            </ol>
                        </li>
                        <strong><li>Pengurus</strong>
                            <ol>
                                <li>
                                    9.1.	Anda dapat menghubungi Pengurus kami jika Anda memiliki keluhan, pertanyaan atau umpan balik tentang Kebijakan Privasi ini, data pribadi Anda yang terdaftar dengan kami, atau sehubungan dengan penggunaan, retensi, pengungkapan atau transfer data pribadi Anda, atau jika Anda ingin mengajukan permintaan, dengan cara berikut:<br>
                                    Attn: ANSORA Perlindungan Data<br>
                                    pengurus@ansora.idAlamat: Perumahan Ngringo Indah Jl. Gatotkaca A1/27, Ngringo, Jaten, Karanganyar, Jawa Tengah 57731
                                </li>
                                <li>Semua permintaan untuk koreksi atau untuk akses ke data pribadi Anda harus secara tertulis. Kami akan berusaha untuk menanggapi permintaan Anda dalam waktu 30 hari, dan jika itu tidak mungkin, kami akan memberi tahu Anda saat kami akan menanggapi Anda.</li>
                                <li>Semua keluhan akan dievaluasi oleh ANSORA tepat waktu. Setelah ANSORA menyelesaikan evaluasi, Pengurus kami (atau perwakilan yang ditunjuk) akan menanggapi orang yang mengajukan keluhan atau umpan balik, dengan hasil evaluasi.</li>
                                <li>Kami mungkin dilarang oleh hukum untuk memenuhi segala permintaan yang Anda buat. Kami juga dapat menolak permintaan apa pun yang Anda buat jika undang-undang mengizinkan kami untuk melakukannya.</li>
                            </ol>
                        </li>
                        </li>
                        <strong><li>Keberlakukan Kebijakan Privasi dan Perubahan Kebijakan Privasi</strong>
                            <ol>
                                <li>Kebijakan Privasi ini berlaku sehubungan dengan pemberitahuan lain, klausul kontrak dan klausul persetujuan yang berlaku sehubungan dengan pengumpulan, penggunaan, dan pengungkapan data pribadi Anda oleh kami.</li>
                                <li>Kami dapat merevisi Kebijakan Privasi ini dari waktu ke waktu tanpa pemberitahuan sebelumnya. Anda dapat menentukan apakah revisi tersebut telah terjadi dengan merujuk pada tanggal terakhir Kebijakan Privasi ini diperbarui. Anda terus menggunakan layanan kami merupakan pengakuan dan penerimaan Anda terhadap perubahan tersebut.</li>
                            </ol>
                        </li>
                        <strong><li>PERATURAN PEMERINTAH</strong><p>
                            Syarat dan ketentuan Kebijakan Privasi ini diatur oleh hukum Indonesia. Dalam hal terjadi perselisihan yang timbul dari Kebijakan Privasi ini, Anda harus terlebih dahulu menghubungi Pengurus kami mengenai kekhawatiran Anda dan menggunakan upaya terbaik Anda untuk menyelesaikan perselisihan dengan niat baik. Kami di pihak kami juga akan menggunakan upaya terbaik kami untuk menyelesaikan masalah Anda dengan itikad baik. Namun, jika tidak ada resolusi damai yang dicapai dalam 30 hari, Anda setuju untuk tunduk pada yurisdiksi eksklusif Pengadilan Indonesia.
                        </p></li>
                    </ol>
                </div>
                <div class="card-body text-white mb-5 tab-pane fade" id="nav-faq">
                    <h1 class="font-weight-bold text-center mb-3">FAQ</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, deserunt sed nulla eius eveniet soluta nihil beatae labore possimus quia, omnis dolore corporis facere dignissimos ab voluptas dolor! Nam voluptatibus, doloremque aliquam ratione vel ipsa rerum necessitatibus doloribus minus, aut id laborum debitis sed illum, officia voluptas libero dicta omnis.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, deserunt sed nulla eius eveniet soluta nihil beatae labore possimus quia, omnis dolore corporis facere dignissimos ab voluptas dolor! Nam voluptatibus, doloremque aliquam ratione vel ipsa rerum necessitatibus doloribus minus, aut id laborum debitis sed illum, officia voluptas libero dicta omnis.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, deserunt sed nulla eius eveniet soluta nihil beatae labore possimus quia, omnis dolore corporis facere dignissimos ab voluptas dolor! Nam voluptatibus, doloremque aliquam ratione vel ipsa rerum necessitatibus doloribus minus, aut id laborum debitis sed illum, officia voluptas libero dicta omnis.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, deserunt sed nulla eius eveniet soluta nihil beatae labore possimus quia, omnis dolore corporis facere dignissimos ab voluptas dolor! Nam voluptatibus, doloremque aliquam ratione vel ipsa rerum necessitatibus doloribus minus, aut id laborum debitis sed illum, officia voluptas libero dicta omnis.</p>
                </div>
            </div>
        </div>

    </div>


</div>

<!-- endof content -->