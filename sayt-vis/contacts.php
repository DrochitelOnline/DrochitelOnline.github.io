<!DOCTYPE html>
<html lang="ru">
  <head>
    <!-- кодировка -->
    <meta charset="utf-8">

    <!-- имя сайта -->
    <title>Лучший Бро</title>

    <!-- стили css -->
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <div class="background">
      <div id="content">
        <div class="conteiner">
          <div class="block">

            <?php include "includes/header.php" ?>

            <section id="block_content">
              <div class="col_left_contacts">
                <div class="contacts_city">
                  <h3>Как меня найти:</h3>
                  <p>город</p>
                  <p>улица</p>
                  <p>дом</p>
                  <p>квартира</p>
                  <h3>Мой номер телефона</h3>
                  <p>+79999999999</p>
                </div>
                <div class="i_in_map" style="padding: 30px;">Я на карте</div>
              </div>

                <form class="col_right_contacts" action"mail/mail.php" method="POST">
                  <div class="block_form_contact">
                    <div class="form_contacts_q">
                      <input type="text" class="form_contacts"  required="" name="name" placeholder="Ваше имя">
                    </div>
                    <div class="form_contacts_q">
                      <input type="text" class="form_contacts"  required="" name="surname" placeholder="Ваша фамилия">
                    </div>
                    <div class="form_contacts_q">
                      <input type="email" class="form_contacts"  required="" name="email" placeholder="Ваш email">
                    </div>
                    <div class="form_contacts_q">
                      <input type="text" class="form_contacts"  required="" name="text" placeholder="что вам нужно?">
                    </div>
                    <div class="form_contacts_submit">
                      <input type="submit" class="form_contacts">
                    </div>
                  </div>
                </form>
            </section>

            <?php include "includes/footer.php" ?>

          </div>
        </div>
      </div>
    </div>
  </body>
</html>
