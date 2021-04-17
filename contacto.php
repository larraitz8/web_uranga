<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <div class="container">
        <div class="text-center">
           <h2 class="section-heading text-uppercase" style="padding-bottom: 10px">Kontaktua / Contacto</h2>
           <!-- <h3 class="section-subheading text-muted">Llámame, si no te contesto, escríbeme un correo o un whatsapp y te contestaré lo antes posible. Explícame que necesitas y tu disponibilidad.</h3><h3 class="section-subheading text-muted">Deitu diezadazu, erantzuten ez badizut, bidali posta elektronikoa edo whatsapp-a eta lehen bailehen erantzungo dizut. Esan diezadazu zer behar duzun eta noiz zauden libre.</h3> -->

       </div>
       <form id="contactForm" name="sentMessage" novalidate="novalidate">
        <div class="row align-items-stretch mb-5">
            <div class="col-md-6">
                <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Nombre/Izena *" required="required" data-validation-required-message="por favor, escriba su nombre." />
                    <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Email/Posta *" required="required" data-validation-required-message="por favor, escriba su correo." />
                    <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Teléfono/Telefonoa *" required="required" data-validation-required-message="por favor, escriba su número de teléfono." />
                    <p class="help-block text-danger"></p>
                </div>
                <div class="form-group form-group-text area mb-md-0"></p>
                    <textarea class="form-control" id="message" placeholder="Enviar mensaje/Bidali mezua *" required="required" data-validation-required-message="por favor, escriba un mensaje."></textarea>
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="col-md-6 contacto" style="text-align: justify;">

                <p> Llámame, si no te contesto, escríbeme un correo o un WhatsApp y te contestaré lo antes posible. Explícame qué necesitas y tu disponibilidad.</p>
             <p> Deitu diezadazu, erantzuten ez badizut, bidali posta elektronikoa edo whatsapp-a eta lehen bailehen erantzungo dizut. Esan diezadazu zer behar duzun eta noiz zauden libre. </p>
         </div>
     </div>
     <div class="text-center">
        <div id="success"></div>
        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Bidali mezua  //  Enviar mensaje</button>
    </div>
</form>
</div>
</body>
</html>