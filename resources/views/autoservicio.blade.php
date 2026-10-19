<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoServicio Pro</title>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bulma@1.0.4/css/bulma.min.css"
    >
    <style>
        body {
            background-color: #0b0f19;
            color: #e2e8f0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
        }

        .navbar {
            background-color: #111827 !important;
            border-bottom: 1px solid #1f293d;
        }
        .navbar-item, .navbar-link {
            color: #cbd5e1 !important;
        }
        .navbar-item:hover, .navbar-link:hover {
            color: #00a8ff !important;
            background-color: #1e293b !important;
        }

        .footer {
            background-color: #0b0f19 !important;
            border-top: 1px solid #1f293d;
            color: #94a3b8;
        }

        .card {
            background-color: #111827;
            color: #ffffff;
            border: 1px solid #1f293d;
            border-radius: 12px;
            overflow: hidden;
            transition: transform 0.3s ease, border-color 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
            border-color: #00a8ff;
        }
        .card-content .title, .card-content .subtitle {
            color: #ffffff !important;
        }

        .box-custom {
            background-color: #111827;
            border: 1px solid #1f293d;
            border-radius: 12px;
            padding: 1.75rem;
            transition: border-color 0.3s ease;
        }
        .box-custom:hover {
            border-color: #00a8ff;
        }

        .text-neon-blue {
            color: #00a8ff !important;
        }
        .bg-neon-blue {
            background-color: #00a8ff !important;
            color: #ffffff !important;
        }

        .button-neon {
            background: linear-gradient(135deg, #0072ff 0%, #00a8ff 100%);
            color: #ffffff !important;
            border: none;
            box-shadow: 0 4px 15px rgba(0, 168, 255, 0.3);
            transition: all 0.3s ease;
        }
        .button-neon:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 168, 255, 0.5);
            color: #ffffff !important;
        }

        .hero-section {
            background: radial-gradient(circle at 80% 20%, rgba(0, 168, 255, 0.12) 0%, transparent 50%),
            radial-gradient(circle at 20% 80%, rgba(0, 114, 255, 0.1) 0%, transparent 50%);
            padding-top: 4rem;
            padding-bottom: 4rem;
        }

        .img-hero-frame {
            border-radius: 16px;
            border: 2px solid rgba(0, 168, 255, 0.4);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.6), 0 0 30px rgba(0, 168, 255, 0.25);
            object-fit: cover;
        }

        .input, .textarea, .select select {
            background-color: #1e293b !important;
            border: 1px solid #334155 !important;
            color: #ffffff !important;
        }
        .input::placeholder, .textarea::placeholder {
            color: #64748b !important;
        }
        .input:focus, .textarea:focus, .select select:focus {
            border-color: #00a8ff !important;
            box-shadow: 0 0 0 0.125em rgba(0, 168, 255, 0.25) !important;
        }
    </style>
</head>
<body>

@include('sections.navbar')

@include('sections.hero')

@include('sections.servicios')

@include('sections.especialidades')

@include('sections.proceso')

@include('sections.nosotros')

@include('sections.destacado')

@include('sections.contacto')

@include('sections.footer')

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
        if ($navbarBurgers.length > 0) {
            $navbarBurgers.forEach(el => {
                el.addEventListener('click', () => {
                    const target = el.dataset.target;
                    const $target = document.getElementById(target);
                    el.classList.toggle('is-active');
                    $target.classList.toggle('is-active');
                });
            });
        }
    });
</script>
</body>
</html>
