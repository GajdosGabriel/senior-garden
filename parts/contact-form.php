

<form name="sentMessage" id="contactForm" novalidate>
  <div class="row">
    <div class="form-group col-lg-4">
      <input type="text" class="form-control" placeholder="Vaše meno *" id="name" required data-validation-required-message="Meno je požadované">
        <p class="help-block text-danger"></p>
    </div>
    <div class="form-group col-lg-4">
      <input type="email" class="form-control" placeholder="Váš Email *" id="email" required data-validation-required-message="Email je požadovaný">
        <p class="help-block text-danger"></p>
    </div>
    <div class="form-group col-lg-4">
      <input type="tel" class="form-control" placeholder="Váš Telefón *" id="phone" required data-validation-required-message="Telefón je požadovaný">
        <p class="help-block text-danger"></p>
    </div>
    <div class="clearfix"></div>
    <div class="form-group col-lg-12">
      <textarea class="form-control" placeholder="Vaša správa *" id="message" required data-validation-required-message="Napíšte nám správu" rows="16"></textarea>
        <p class="help-block text-danger"></p>
    </div>
    <div class="form-group col-lg-12">
      <div id="success"></div>
      <button type="submit" class="btn btn-primary btn-lg"> <i class="fa fa-cloud-upload"></i> Odoslať správu</button>
    </div>
  </div>
</form>