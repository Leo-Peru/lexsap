<?php
// Base Domain
$base_domain = "https://lexsap.com.pe";

// Default Fallbacks
if (!isset($page_title) || empty($page_title)) {
    $page_title = "LEXSAP INTELLECTUAL PROPERTY - Law Firm specialized in Intellectual Property and Health Records in Peru";
}
if (!isset($page_description) || empty($page_description)) {
    $page_description = "Intellectual Property and Health Registries law firm in Peru. Specialized in trademark registration, patents, IP litigation, DIGEMID and DIGESA.";
}
if (!isset($page_keywords) || empty($page_keywords)) {
    $page_keywords = "Peru trademark registration, patent registration, Peru trademarks and copyright, Peru trademark litigation, Renewals, Health Registries, DIGEMID, DIGESA";
}

// Canonical URL & Alternates
if (!isset($canonical_url) || empty($canonical_url)) {
    if (isset($pagina)) {
        if ($pagina == 'index') {
            $canonical_url = $base_domain . "/";
        } elseif ($pagina == 'nosotros') {
            $canonical_url = $base_domain . "/about_us.php";
        } elseif ($pagina == 'servicios') {
            $canonical_url = $base_domain . "/services.php";
        } elseif ($pagina == 'contacto') {
            $canonical_url = $base_domain . "/contact.php";
        } else {
            $canonical_url = $base_domain . "/";
        }
    } else {
        $canonical_url = $base_domain . "/";
    }
}

if (!isset($alternate_en) || empty($alternate_en)) {
    if (isset($pagina)) {
        if ($pagina == 'index') $alternate_en = $base_domain . "/";
        elseif ($pagina == 'nosotros') $alternate_en = $base_domain . "/about_us.php";
        elseif ($pagina == 'servicios') $alternate_en = $base_domain . "/services.php";
        elseif ($pagina == 'contacto') $alternate_en = $base_domain . "/contact.php";
        else $alternate_en = $base_domain . "/";
    } else {
        $alternate_en = $base_domain . "/";
    }
}

if (!isset($alternate_es) || empty($alternate_es)) {
    if (isset($pagina)) {
        if ($pagina == 'index') $alternate_es = $base_domain . "/es/";
        elseif ($pagina == 'nosotros') $alternate_es = $base_domain . "/es/nosotros.php";
        elseif ($pagina == 'servicios') $alternate_es = $base_domain . "/es/servicios.php";
        elseif ($pagina == 'contacto') $alternate_es = $base_domain . "/es/contacto.php";
        else $alternate_es = $base_domain . "/es/";
    } else {
        $alternate_es = $base_domain . "/es/";
    }
}

if (!isset($breadcrumb_name)) {
    if (isset($pagina)) {
        if ($pagina == 'nosotros') $breadcrumb_name = "About us";
        elseif ($pagina == 'servicios') $breadcrumb_name = "Services";
        elseif ($pagina == 'contacto') $breadcrumb_name = "Contact";
        else $breadcrumb_name = "Home";
    } else {
        $breadcrumb_name = "Home";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?php echo htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8'); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($page_keywords, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="author" content="LEXSAP INTELLECTUAL PROPERTY EIRL">

    <!-- Geo Tags -->
    <meta name="geo.region" content="PE-LIM">
    <meta name="geo.placename" content="Santiago de Surco, Lima, Perú">

    <!-- Canonical & Multilingual Hreflang -->
    <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8'); ?>">
    <link rel="alternate" hreflang="en" href="<?php echo htmlspecialchars($alternate_en, ENT_QUOTES, 'UTF-8'); ?>">
    <link rel="alternate" hreflang="es" href="<?php echo htmlspecialchars($alternate_es, ENT_QUOTES, 'UTF-8'); ?>">
    <link rel="alternate" hreflang="x-default" href="<?php echo htmlspecialchars($alternate_en, ENT_QUOTES, 'UTF-8'); ?>">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="LEXSAP INTELLECTUAL PROPERTY">
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($page_description, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:url" content="<?php echo htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:image" content="https://lexsap.com.pe/assets/img/logo/logox600x200.jpg">
    <meta property="og:image:alt" content="LEXSAP INTELLECTUAL PROPERTY">
    <meta property="og:locale" content="en_US">
    <meta property="og:locale:alternate" content="es_PE">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:image" content="https://lexsap.com.pe/assets/img/logo/logox600x200.jpg">
    <meta name="twitter:image:alt" content="LEXSAP INTELLECTUAL PROPERTY">

    <!-- Favicons -->
    <link href="assets/img/logo/favicon.png" rel="icon">
    <link href="assets/img/logo/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts Preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/all.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "LegalService",
          "@id": "https://lexsap.com.pe/#legalservice",
          "name": "LEXSAP INTELLECTUAL PROPERTY EIRL",
          "alternateName": "LEXSAP",
          "url": "https://lexsap.com.pe/",
          "logo": "https://lexsap.com.pe/assets/img/logo/logox600x200.jpg",
          "image": "https://lexsap.com.pe/assets/img/logo/logox600x200.jpg",
          "description": "Law firm in Lima, Peru specialized in Intellectual Property, trademark registration, patents, IP litigation, and DIGEMID/DIGESA health registries.",
          "telephone": ["+51-998672330", "+51-939893753"],
          "email": ["general@lexsap.com.pe", "contacto@lexsap.com.pe"],
          "priceRange": "$$",
          "address": {
            "@type": "PostalAddress",
            "addressLocality": "Santiago de Surco",
            "addressRegion": "Lima",
            "addressCountry": "PE"
          },
          "areaServed": [
            {
              "@type": "Country",
              "name": "Peru"
            },
            {
              "@type": "AdministrativeArea",
              "name": "Worldwide"
            }
          ],
          "sameAs": [
            "https://www.facebook.com/lexsap.35175"
          ],
          "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Legal & Regulatory Services",
            "itemListElement": [
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "Trademark Registration & Copyrights in Peru"
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "Patent Prosecution & Utility Models"
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "Intellectual Property Litigation"
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "Health Registries - DIGEMID (Pharmaceuticals & Cosmetics)"
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "Health Registries - DIGESA (Food & Beverage Products)"
                }
              }
            ]
          }
        },
        {
          "@type": "WebSite",
          "@id": "https://lexsap.com.pe/#website",
          "url": "https://lexsap.com.pe/",
          "name": "LEXSAP INTELLECTUAL PROPERTY",
          "publisher": {
            "@id": "https://lexsap.com.pe/#legalservice"
          },
          "inLanguage": "en"
        }<?php if (isset($pagina) && $pagina != 'index'): ?>,
        {
          "@type": "BreadcrumbList",
          "@id": "<?php echo htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8'); ?>#breadcrumb",
          "itemListElement": [
            {
              "@type": "ListItem",
              "position": 1,
              "name": "Home",
              "item": "https://lexsap.com.pe/"
            },
            {
              "@type": "ListItem",
              "position": 2,
              "name": "<?php echo htmlspecialchars($breadcrumb_name, ENT_QUOTES, 'UTF-8'); ?>",
              "item": "<?php echo htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8'); ?>"
            }
          ]
        }<?php endif; ?>
      ]
    }
    </script>
</head>

<body>
