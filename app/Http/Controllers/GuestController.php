<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\portofolio;
use App\klien;
use App\Feedback;
use App\Kontak;
use App\Produk;
use App\ProdukSosialMedia;
use App\ProdukBrandingDesign;
use App\ProdukKontenMarketing;
use App\ProdukPhotography;
use App\BannerHome;
use App\BannerPortofolio;
use App\BannerProduk;
use App\Tentang;
use App\BannerTentang;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class GuestController extends Controller
{
    public function awal(){
        return view('index');
    }
    public function index(){
        $portofolios = Portofolio::all();
        $bannerportofolio = BannerPortofolio::all();
        $kontak = Kontak::all();
        return view('portofoliopage', ['portofolios' => $portofolios,'bannerportofolio'=>$bannerportofolio, 'kontak'=>$kontak]);
    }
    public function utama(){
        $portofolio = Portofolio::all();
        $client = Klien::all();
        $feedback = Feedback::all();
        $kontak = Kontak::all();
        $produksosialmedia = ProdukSosialMedia::all();
        $produkbrandingdesign = ProdukBrandingDesign::all();
        $produkkontenmarketing = ProdukKontenMarketing::all();
        $produkphotography = ProdukPhotography::all();
        $bannerhome = BannerHome::all();
        return view('index', ['client' => $client,'portofolio'=>$portofolio,'feedback'=>$feedback, 'kontak'=>$kontak, 'produksosialmedia'=>$produksosialmedia, 'produkbrandingdesign'=>$produkbrandingdesign, 'produkkontenmarketing'=>$produkkontenmarketing, 'produkphotography'=>$produkphotography, 'bannerhome'=>$bannerhome]);
    }
    public function produk(){
        $produk = Produk::all();
        $kontak = Kontak::all();
        $produksosialmedia = ProdukSosialMedia::all();
        $produkbrandingdesign = ProdukBrandingDesign::all();
        $produkkontenmarketing = ProdukKontenMarketing::all();
        $produkphotography = ProdukPhotography::all();
        $bannerproduk = BannerProduk::all();
        return view('produkpage', ['produk' => $produk,'kontak'=>$kontak,'produksosialmedia'=>$produksosialmedia ,'produkbrandingdesign'=>$produkbrandingdesign, 'produkkontenmarketing'=>$produkkontenmarketing, 'produkphotography'=>$produkphotography, 'bannerproduk'=>$bannerproduk]);
    }
    public function tentang(){
        $kontak = Kontak::all();
        $tentang = Tentang::all();
        $bannertentang = BannerTentang::all();
        return view('tentangpage', ['kontak' => $kontak, 'tentang'=>$tentang, 'bannertentang'=>$bannertentang]);
    }
    function sendMail(Request $request){
        
        $subject = "Contact dari " . $request->input('nama');
        $nama = $request->input('nama');
        $email = $request->input('email');
        $nomor_telp = $request->input('nomor_telp');
        $pesan = $request->input('pesan');

        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            // Pengaturan Server
           // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
           $mail = new PHPMailer(); // create a new object
           $mail->IsSMTP(); // enable SMTP
           $mail->SMTPAuth = true; // authentication enabled
           $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
           $mail->Host = "smtp.gmail.com";
           $mail->Port = 465; // or 587                             // TCP port to connect to

            // Siapa yang mengirim email

            // Siapa yang akan menerima email
            $mail->addAddress('taufikmasrizal1@gmail.com', 'Taufik');     // Add a recipient
            // $mail->addAddress('ellen@example.com');               // Name is optional

            // ke siapa akan kita balas emailnya
            $mail->addReplyTo($email, $nama);
            
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name


            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $pesan;
            $mail->AltBody = $pesan;

            $mail->send();

            $request->session()->flash('status', 'Terima kasih, kami sudah menerima email anda.');
            return redirect('');

        } catch (Exception $e) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }

    }
    
}
