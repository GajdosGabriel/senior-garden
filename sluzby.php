<?php include 'parts/header-top.php'; ?>

<meta name="description" content="Komplexné služby zariadenia SeniorGarden pri Leviciach. Domov dôchodcov">

<title>Poskytované služby</title>

<?php include 'parts/header-bottom.php'; ?>
<?php include 'parts/header-nav.php'; ?>

<?php
/**
 * Zoznam poskytovaných služieb – text a fotky sa upravujú tu.
 */
$sluzby = array(
  array(
    'id'    => 'ubytovanie',
    'ikona' => 'fa-bed',
    'nazov' => 'Ubytovanie',
    'podnadpis' => 'Celodenné ubytovanie',
    'foto'  => 'resources/foto/izba.jpg',
    'popis' => 'Dvojlôžkové izby so samostatnou kúpeľňou a WC. Každá izba na prízemí má samostatný východ na vonkajšiu terasu, resp. na vnútornú spoločnú chodbu. Všetky izby aj kúpeľne sú plne vybavené. Spoločné priestory nemajú nemocničný, ale skôr komunitno-rodinný charakter. Všetky priestory sú denne čistené a upratované.',
  ),
  array(
    'id'    => 'stravovanie',
    'ikona' => 'fa-cutlery',
    'nazov' => 'Stravovanie',
    'podnadpis' => 'Stravovanie 5× denne',
    'foto'  => 'resources/foto/DSC_0131.JPG',
    'popis' => 'Strava sa podáva 5× denne v priestoroch jedálne, resp. na izbe klienta. Strava je upravená podľa aktuálneho zdravotného stavu klienta, podľa potreby sa podáva pod dohľadom, resp. za pomoci personálu. Zohľadňujeme potrebu diétnej stravy – racionálna, neslaná, diabetická atď.',
  ),
  array(
    'id'    => 'opatrovatelska',
    'ikona' => 'fa-heart',
    'nazov' => 'Opatrovateľská starostlivosť',
    'podnadpis' => 'Kompletná starostlivosť',
    'foto'  => 'resources/foto-galeria/P2081063.JPG',
    'popis' => 'Poskytujeme opatrovateľskú starostlivosť pre klientov s odkázanosťou na pomoc inej osoby. Starostlivosť o klientov zabezpečuje odborný personál v nepretržitej prevádzke.',
  ),
  array(
    'id'    => 'zdravotna',
    'ikona' => 'fa-user-md',
    'nazov' => 'Zdravotná starostlivosť',
    'podnadpis' => 'Individuálna zdravotná starostlivosť',
    'foto'  => 'resources/foto/P2081056.jpg',
    'popis' => 'Sprostredkujeme lekársku a zdravotnú starostlivosť. Súčasťou tejto starostlivosti je aj zabezpečenie odborných vyšetrení (odvoz a sprevádzanie sestrou, resp. sociálnou pracovníčkou). Klientom sprostredkujeme aj vyšetrenie všeobecným lekárom, resp. psychiatrom. V prípade potreby zabezpečíme urgentnú lekársku pomoc. Klientovi zabezpečíme lieky a potrebné zdravotné pomôcky podľa potreby.',
  ),
  array(
    'id'    => 'socialna',
    'ikona' => 'fa-users',
    'nazov' => 'Sociálna starostlivosť',
    'podnadpis' => 'Odborná sociálna pomoc',
    'foto'  => 'resources/foto-galeria/P2081056.JPG',
    'popis' => 'Klientovi je k dispozícii vysokoškolsky vzdelaná sociálna pracovníčka, ktorá pre klienta zabezpečuje sociálne poradenstvo, ergoterapiu a sociálnu rehabilitáciu.',
  ),
  array(
    'id'    => 'duchovna',
    'ikona' => 'fa-book',
    'nazov' => 'Duchovenská služba',
    'podnadpis' => 'Rôznych kresťanských vierovyznaní',
    'foto'  => 'resources/foto/DSC_0275.jpg',
    'popis' => 'Na požiadanie klienta, podľa jeho vierovyznania, sprostredkujeme pastoračnú starostlivosť duchovným cirkvi, ku ktorej klient patrí.',
  ),
);
?>

<!-- =========================================================================================== -->
<!-- =================== Wide Featured Image =================================================== -->
<!-- =========================================================================================== -->

<section class="qt-middle">
  <div class="qt-featured-image qt-header-featured-image qt-header-featured-image-wide">
    <img src="resources/img/featured-1.jpg" alt="Opatrovateľka pri meraní tlaku klientke">
  </div>
</section>

<!-- =========================================================================================== -->
<!-- =================== Begin page content ==================================================== -->
<!-- =========================================================================================== -->

<section class="qt-page-wrapper sg-sluzby">
  <div class="container">

    <div class="qt-page-header">
      <h2>Služby nášho zariadenia <small>– pre klientov</small></h2>
      <ol class="breadcrumb">
        <li><a href="index.php">Úvod</a></li>
        <li class="active">Služby klientom</li>
      </ol>
    </div>

    <p class="sg-sluzby-intro">
      Našim klientom poskytujeme celodennú starostlivosť v pokojnom, rodinnom prostredí.
      Okrem základných potrieb myslíme aj na zdravie, spoločenský a duchovný život každého z nich.
    </p>

    <!-- Prehľad služieb -->
    <ul class="sg-sluzby-prehlad">
      <?php foreach ( $sluzby as $s ) : ?>
        <li>
          <a href="#<?php echo $s['id']; ?>">
            <span class="sg-ikona"><i class="fa <?php echo $s['ikona']; ?>" aria-hidden="true"></i></span>
            <span><?php echo $s['nazov']; ?></span>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>

    <!-- Detail jednotlivých služieb -->
    <?php foreach ( $sluzby as $i => $s ) : ?>
      <article id="<?php echo $s['id']; ?>" class="sg-sluzba<?php echo $i % 2 ? ' sg-sluzba-opacne' : ''; ?>">
        <div class="sg-sluzba-foto">
          <a href="<?php echo $s['foto']; ?>" class="sg-lightbox" title="<?php echo $s['nazov']; ?>">
            <img src="<?php echo $s['foto']; ?>" alt="<?php echo $s['nazov']; ?> v zariadení Senior Garden" loading="lazy">
          </a>
        </div>
        <div class="sg-sluzba-text">
          <span class="sg-ikona sg-ikona-velka"><i class="fa <?php echo $s['ikona']; ?>" aria-hidden="true"></i></span>
          <h3><?php echo $s['nazov']; ?></h3>
          <p class="sg-sluzba-podnadpis"><?php echo $s['podnadpis']; ?></p>
          <p><?php echo $s['popis']; ?></p>
        </div>
      </article>
    <?php endforeach; ?>

    <!-- Výzva na kontakt -->
    <div class="sg-sluzby-cta">
      <div>
        <h3>Máte záujem o naše služby?</h3>
        <p>Radi vám odpovieme na otázky, ukážeme zariadenie a pomôžeme s vybavením žiadosti.</p>
      </div>
      <div class="sg-sluzby-cta-tlacidla">
        <a class="btn btn-primary btn-lg" href="contact-us.php"><i class="fa fa-envelope"></i> Kontaktujte nás</a>
        <a class="btn btn-default btn-lg" href="cennik-sluzieb.php"><i class="fa fa-eur"></i> Cenník služieb</a>
      </div>
    </div>

  </div>
</section>


<?php include 'parts/footer-gallery.php'; ?>
<?php include 'parts/footer.php'; ?>

<script>
  // Zväčšenie fotky po kliknutí (Magnific Popup)
  $(function () {
    if ($.fn.magnificPopup) {
      $('.sg-lightbox').magnificPopup({ type: 'image', closeOnContentClick: true });
    }
  });
</script>
