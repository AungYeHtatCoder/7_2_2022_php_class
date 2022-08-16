<form role="form" id="contact-form" method="post">
  <label for="name">Name</label>
  <input type="text" placeholder="Full Name" name="name" required />

  <label for="email">Email</label>
  <input type="email" placeholder="Your Email" name="email" required />

  <label>Message</label>
  <textarea name="message" placeholder="Your Message" rows="9"></textarea>

  <button type="submit" class="btn">Send</button>
</form>

<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
  $(document).ready(function () {
    $('#contact-form').on('submit', function (e) {
      //Don't foget to change the id form
      $.ajax({
        url: 'contact.php', //===PHP file name====
        data: $(this).serialize(),
        type: 'POST',
        success: function (data) {
          console.log(data);
          //Success Message == 'Title', 'Message body', Last one leave as it is
          swal('¡Success!', 'Message sent!', 'success');
        },
        error: function (data) {
          //Error Message == 'Title', 'Message body', Last one leave as it is
          swal('Oops...', 'Something went wrong :(', 'error');
        },
      });
      e.preventDefault(); //This is to Avoid Page Refresh and Fire the Event "Click"
    });
  });
</script>
