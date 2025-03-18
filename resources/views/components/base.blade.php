<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>A-Labs - Rental</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url('/')}}/assets/images/logo/A-Labs1.png">
    <link href="{{ url('/') }}/style/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('/') }}/style/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <link href="{{ url('/') }}/style/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/style/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ url('/') }}/style/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/style/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/style/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ url('/') }}/style/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/style/assets/vendor/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet"> <!-- Poppins font -->

    <!-- Template Main CSS File -->
    <link href="{{ url('/') }}/style/assets/css/style.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">


    <!-- =======================================================
  * Template Name: Arsha - v4.3.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

    <style>
        .btn-interactive {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .btn-interactive:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        }

        .btn-interactive:focus {
            outline: none;
            box-shadow: 0 0 10px rgba(0, 0, 255, 0.4);
        }
    </style>
</head>

<body>

    <x-section.navbar />

    <div>
        <x-template.utils.notif-front />
        {{ $slot }}
    </div>

    <x-section.footer />

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ url('/') }}/style/assets/vendor/aos/aos.js"></script>
    <script src="{{ url('/') }}/style/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('/') }}/style/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ url('/') }}/style/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ url('/') }}/style/assets/vendor/php-email-form/validate.js"></script>
    <script src="{{ url('/') }}/style/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ url('/') }}/style/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="{{ url('/') }}/style/assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ url('/') }}/style/assets/vendor/datatables/dataTables.bootstrap.min.js"></script>
    <!-- jQuery and DataTables JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "paging": true, // Aktifkan pagination
                "searching": true, // Aktifkan pencarian
                "ordering": true, // Aktifkan pengurutan kolom
                "info": true, // Menampilkan informasi jumlah data
                "lengthChange": true, // Aktifkan pilihan jumlah data per halaman
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.11.5/i18n/Indonesian.json"
                }
            });
        });
    </script>

    <!-- Template Main JS File -->
    <script src="{{ url('/') }}/style/assets/js/main.js"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <!-- Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Aktifkan tooltip
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        tooltipTriggerList.forEach(function(tooltipTriggerEl) {
            new bootstrap.Tooltip(tooltipTriggerEl);
        });
    </script>

</body>

</html>