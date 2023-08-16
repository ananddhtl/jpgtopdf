<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oxygen Implant</title>
    <link rel="stylesheet" href="{{asset('convertor/style-1.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
@if ($errors->any())
<div class="sweetmessage">
    @foreach ($errors->all() as $error)
    <p>{{ $error }}</p>
    @endforeach
</div>
@endif
<body>

    <!--Modal PopUp-->



    <!---Modal Popup Ends-->
    <!----Logo Navbar Starts Here-->
    <div class="nav-sticky">
        <div class="container">

            <div class="logo-navabar">
                <div class="logo">
                    <img src="{{asset('convertor/image/oxygen.png')}}" alt="">
                </div>
                <div class="login-register">
                    <div class="join-us" id="registerBtn">
                        <p>About US</p>

                    </div>
                    <div class="join-us" id="registerBtn">
                        <p>Contact US</p>

                    </div>



                </div>
            </div>

        </div>
    </div>
    <!---Logo Navbar Ends Here-->

    <!---Banner Starts Here-->

    <div class="background">
        <div class="container">
            <div class="banner-image-container">
                <div class="banner-description" data-aos="fade-right" data-aos-duration="700">
                    <h1>Transform <br><span> Images into PDFs</span><br> Effortlessly</h1>
                    <p>Turn your pictures and graphics into professional PDF documents with our easy-to-use online
                        converter. Whether it's for work, school, or personal use, our tool simplifies the process. No
                        more hassle – just seamless conversion.</p>

                </div>

                <div class="banner-image" data-aos="fade-left" data-aos-duration="700">
                    <img src="{{asset('convertor/image/banner.png')}}" alt="">
                </div>
            </div>

        </div>
    </div>
    <!---Banner Ends Here-->

    <!---How To Register Starts Here-->
    <div class="whole-background">

        <div class="container contain-background">
            <h1 data-aos="fade-down" data-aos-duration="700">Steps For Conversion </h1>
            <div class="steps-containers">
                <div class="stp-container" data-aos="fade-down" data-aos-duration="900">
                    <h3>1.Upload Your Image</h3>
                    <p>Select the image you want to convert and upload it using the "Upload" button.</p>
                </div>
                <div class="stp-container m-10" data-aos="fade-down" data-aos-duration="1400">
                    <h3>2.Conversion in Progress</h3>
                    <p>Your image will be swiftly transformed into a PDF format.</p>
                </div>
                <div class="stp-container m-20" data-aos="fade-down" data-aos-duration="1900">
                    <h3>3.View Your PDF</h3>
                    <p>A preview of your converted PDF will appear for you to review. </p>
                </div>
                <div class="stp-container m-30" data-aos="fade-down" data-aos-duration="2400">
                    <h3>4.Download and Done</h3>
                    <p>Click the "Download" button to save your PDF to your device. You're all set!</p>
                </div>
            </div>
        </div>
    </div>
    <!---How To Register Ends Here-->
    <div class="dotted-bg-background">
        <div class="dotted-background">
        </div>
        <div class="container our-services">
            <h1>JPG to PDF</h1>
            <form method="post" action="{{ url('/generatepdf') }}" enctype="multipart/form-data">
                @csrf
                <div class="upload-container">
                    <div class="upload-file">
                        <input type="file" name="images[]" multiple>
                    </div>
                    <button type="submit">Generate PDF</button>
                </div>
            </form>
        </div>
    </div>
    <!--Our Services Starts Here-->

    <!---Our Services Ends Here-->

    <!--Service hrs-->
    <div class="background1">
        <div class="container">
            <div class="banner-image-container">
                <div class="banner-description" style="margin-top: 30px;" data-aos="fade-right" data-aos-duration="800">
                    <h1><span> 24/7 <br> Support</span></h1>
                    <p>We are in support 24 hrs a day, every day of the week ,including holidays.</p>
                    <div class="login-button">
                        <button class="log-button">Contact Us</button>
                    </div>
                </div>

                <div class="banner-image" data-aos="fade-left" data-aos-duration="800">
                    <img src="{{asset('convertor/image/24hours.png') }}" alt="" style="top:20px; right:20px ;">
                </div>
            </div>

        </div>
    </div>


    <div class="dotted-bg-background">
        <div class="dotted-background">
        </div>
        <div class="container our-services">
            <h1>Upcoming Services</h1>
            <div class="services-containers">
                <div class="serv-container" data-aos="fade-up" data-aos-duration="800">
                    <div class="serv-images">
                        <img src="{{asset('convertor/image/services.png') }}" alt="" style="height: 90px;">
                    </div>
                    <h3>PDF to Document</h3>
                    <p>Convert your PDF files into editable document formats with ease.</p>
                </div>
                <div class="serv-container" data-aos="fade-up" data-aos-duration="900">
                    <div class="serv-images">
                        <img src="{{asset('convertor/image/services.png') }}" alt="" style="height: 90px;">
                    </div>
                    <h3>Document to PDF</h3>
                    <p>Effortlessly convert your documents into high-quality PDF files.</p>
                </div>
                <div class="serv-container" data-aos="fade-up" data-aos-duration="1000">
                    <div class="serv-images">
                        <img src="{{asset('convertor/image/services.png') }}" alt="" style="height: 90px;">
                    </div>
                    <h3>PDF to JPG</h3>
                    <p>Convert PDF pages into individual JPG image files quickly.</p>
                </div>
                <div class="serv-container" data-aos="fade-up" data-aos-duration="1100">
                    <div class="serv-images">
                        <img src="{{asset('convertor/image/services.png') }}" alt="" style="height: 90px;">
                    </div>
                    <h3>PDF to PNG</h3>
                    <p>Transform PDFs into PNG images while preserving quality.</p>
                </div>
                <div class="serv-container" data-aos="fade-up" data-aos-duration="1200">
                    <div class="serv-images">
                        <img src="{{asset('convertor/image/services.png') }}" alt="" style="height: 90px;">
                    </div>
                    <h3>PDF Compressor</h3>
                    <p>Compress large PDF files to save space without compromising quality.</p>
                </div>
                <div class="serv-container" data-aos="fade-up" data-aos-duration="1300">
                    <div class="serv-images">
                        <img src="{{asset('convertor/image/services.png') }}" alt="" style="height: 90px;">
                    </div>
                    <h3>Combine PDF</h3>
                    <p>Merge multiple PDF files into a single, organized document.</p>
                </div>
            </div>
        </div>

    </div>

    <footer>
        <div class="container">
            <div class="footer-top">
                <div class="fot-cont">
                    <h2>Sitemap</h2>
                    <ul>
                        <li><a href=""><i class="fa-solid fa-arrow-right"></i> About us</a></li>
                        <li><a href=""><i class="fa-solid fa-arrow-right"></i> Help And Support</a> </li>
                    </ul>
                </div>
                <div class="fot-cont">
                    <h2>Quick Links</h2>
                    <ul>

                        <li><a href=""><i class="fa-solid fa-arrow-right"></i> Copyright Policy</a></li>
                        <li><a href=""><i class="fa-solid fa-arrow-right"></i> Private Policy</a></li>
                        <li><a href=""><i class="fa-solid fa-arrow-right"></i> Security Policy</a> </li>
                    </ul>
                </div>
                <div class="fot-cont">
                    <h2>Social Links</h2>
                    <ul class="social-links">
                        <li><a href=""><i class="fa-brands fa-square-facebook"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-youtube"></i></a></li>
                    </ul>
                </div>
                <div class="fot-cont">
                    <h2>About Us</h2>
                    <p>We believe that technology should enhance your productivity, not hinder it. Whether you're a
                        professional, a student, or someone who simply wants to convert files hassle-free, our
                        user-friendly platform is designed with you in mind.</p>
                </div>
            </div>

        </div>
        <div class="footer-bottom">
            <div class="container bottom-footer-container">
                <div class="mobile-app-pictures">
                    <img src="{{asset('convertor/image/play-store.png')}}" alt="">
                    <img src="{{asset('convertor/image/apple-store.png')}}" alt="">
                </div>
                <div class="design-develop-by">
                    <p>© Copyright <a href="">Ananda Dhital</a></p>
                </div>
            </div>
        </div>

    </footer>
    <!--Footer Ends Here-->


</body>
<script>
document.getElementById("loginBtn").addEventListener("click", function() {
    document.getElementById("loginModal").style.display = "block";
    document.getElementById("loginForm").style.display = "block";
});

document.getElementById("registerBtn").addEventListener("click", function() {
    document.getElementById("registerModal").style.display = "block";
    document.getElementById("registerForm").style.display = "block";
});

document.getElementsByClassName("close")[0].addEventListener("click", function() {
    document.getElementById("loginModal").style.display = "none";
    document.getElementById("loginForm").style.display = "none";
});

document.getElementsByClassName("close")[1].addEventListener("click", function() {
    document.getElementById("registerModal").style.display = "none";
    document.getElementById("registerForm").style.display = "none";
});
</script>

<!---Aos Javascript---->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"></script>
<script type="text/javascript" src="{{asset('convertor/script.js')}}"></script>
<script>
AOS.init();
</script>
<!---Aos Javascript-->

</html>