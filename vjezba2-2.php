<?php
    $naslov="PHP dokument - vježba 1c";
    $autor="Ivan Topolovac";
    $link_href = "https://hr.wikipedia.org/wiki/PHP";
    $link_text = "Saznaj više o PHP-u";
    $link_zad = "vjezba2-1.php";
    $link_ime = "Natrag na vježbu 1b";
?>

<!-- Vjezba2-1.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($naslov); ?></title>
    <style>
    :root { --bg:#0f172a; --card:#ffffff; --text:#111827; --muted:#6b7280; --accent:#2563eb; }
    * { box-sizing: border-box; }
    body { margin:0; font-family: system-ui,-apple-system,"Segoe UI",Roboto,sans-serif;
           background:var(--bg); color:var(--text); }
    .wrap { max-width:720px; margin:48px auto; background:var(--card); padding:32px;
            border-radius:16px; box-shadow:0 10px 30px rgba(0,0,0,.08); }
    h1 { margin:0 0 12px; font-size:2rem; }
    p  { margin:0 0 14px; line-height:1.6; }
    .btn { display:inline-block; padding:10px 16px; border:1px solid var(--accent);
           border-radius:10px; text-decoration:none; }
    .btn:hover { background:var(--accent); color:#fff; }
    footer { margin-top:20px; font-size:.9rem; color:var(--muted); }
  </style>
        
</head>
<body>
    <main class="wrap">
    <h1><?php echo htmlspecialchars($naslov); ?></h1>
    <p>Ovu stranicu izradio je <strong><?php echo htmlspecialchars($autor); ?></strong>.</p>
    <p>Ova stranica nastavlja vježbu 1b i služi za uvježbavanje varijabli, ispisa i osnovnog CSS-a.</p>
    <p>
      <a class="btn" href="<?php echo htmlspecialchars($link_href); ?>"
         target="_blank" rel="noopener"><?php echo htmlspecialchars($link_text); ?></a>
        <a class="btn" href="<?php echo htmlspecialchars($link_zad); ?>"
         target="_blank" rel="noopener"><?php echo htmlspecialchars($link_ime); ?></a>
    </p>
    <footer>&copy; <?php echo date('Y'); ?> — Demo za PHP</footer>
  </main>
</body>
</html>
