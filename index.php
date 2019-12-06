<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Overpass+Mono:300,400" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Overpass:600" rel="stylesheet">

        <link rel="stylesheet" href="css/style.css">
        
        <title>Stenbrottsvägen 3 – Bokning och nyttig info</title>
    </head>

    <body>
        <header class="header">
            <div class="header__text-box">
                <h1 class="heading-primary">
                    <span class="heading-primary--main">Stenbrottsvägen 3</span>
                    <span class="heading-primary--sub">Bokning och nyttig info för vårat släkthus</span>
                </h1>
            </div>
        </header>

        <main>
            <section class="section-about">
                <div class="section-about__content">
                    <p class="paragraph u-margin-bottom-big">Välkommen till vår portal på webben för Stenbrottsvägen 3. Här kan du lägga in datum du besöker huset, finna nödvändig information och annat som kan vara bra att veta! </p>
                    <a class="section-about__weather weatherwidget-io" href="https://forecast7.com/sv/57d8619d05/farosund/" data-label_1="FÅRÖSUND" data-font="Open Sans" data-icons="Climacons Animated" data-mode="Current" data-theme="original" data-basecolor="" data-textcolor="#000" data-mooncolor="#dfdede"  data-cloudfill="#f7f7f7">FÅRÖSUND</a>
                </div>
            </section>

            <section class="section-book">
                <div class="section-book__title">
                    <h2 class="heading-secondary heading-secondary--black">
                        <span class="heading-secondary--main">Boka vistelse vid huset</span>
                    </h2>
                    <p class="paragraph paragraph--black">Skriv in bokande person, antal gäster, incheckning, utcheckning och vilka rum/stugor du kommer använda. Allmänna utrymmen i huset är till för alla, och behöver därför inte vara med i bokningen nedan.</p>
                </div>

                <div class="section-book__form">
                            <form action="" method="POST" class="form" id="bookForm">
                                <div class="row">
                                    <div class="form__col--34">
                                    <input type="text" name="bookName" class="form__input" id="name" placeholder="Person som bokar" required>
                                    <label for="name" class="form__label">Person som bokar</label>
                                    </div>    
                                    <div class="form__col--14">    
                                    <select name="guests" class="form__select" required>
                                        <option value="" disabled selected>Gäster &#8964;</option>
                                        <option value="1">1 gäster</option>
                                        <option value="2">2 gäster</option>
                                        <option value="3">3 gäster</option>
                                        <option value="4">4 gäster</option>
                                        <option value="5">5 gäster</option>
                                        <option value="6">6 gäster</option>
                                        <option value="7">7 gäster</option>
                                        <option value="8">8 gäster</option>
                                        <option value="9">9 gäster</option>
                                        <option value="10">10 gäster</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form__col--12">
                                        <input type="text" name="checkIn" class="form__input" placeholder="Ankomst (ååmmdd)" required>
                                        <label class="form__label">Ankomst (ååmmdd)</label>
                                    </div> 
                                    <div class="form__col--12">
                                        <input type="text" name="checkOut" class="form__input" placeholder="Avresa (ååmmdd)" required>
                                        <label class="form__label">Avresa (åååå-mm-dd)</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form__col--14-2">
                                        <label class="form__check-label">Bungetorp
                                            <input type="checkbox" class="form__check-input" name="rooms[]" value="Bungetorp">
                                            <span class="form__check--checkmark"></span>
                                        </label><br>
                                        <label class="form__check-label">Kammaren
                                            <input type="checkbox" class="form__check-input" name="rooms[]" value="Kammaren">
                                            <span class="form__check--checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form__col--14-2">
                                        <label class="form__check-label">Kerstins
                                            <input type="checkbox" class="form__check-input" name="rooms[]" value="Kerstins">
                                            <span class="form__check--checkmark"></span>
                                        </label><br>
                                        <label class="form__check-label">Sivs
                                            <input type="checkbox" class="form__check-input" name="rooms[]" value="Sivs">
                                            <span class="form__check--checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form__col--14-2">
                                        <label class="form__check-label">Stensbo
                                            <input type="checkbox" class="form__check-input" name="rooms[]" value="Stensbo">
                                            <span class="form__check--checkmark"></span>
                                        </label><br>
                                        <label class="form__check-label">Thomas
                                            <input type="checkbox" class="form__check-input" name="rooms[]" value="Thomas">
                                            <span class="form__check--checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form__col--14-2">
                                        <label class="form__check-label">Vårat
                                            <input type="checkbox" class="form__check-input" name="rooms[]" value="Vårat">
                                            <span class="form__check--checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form__col--1">
                                        <input type="submit" name="Submit" class="btn btn--book" value="Lägg in bokning">
                                    </div>
                                </div>           
                            </form>
                        </div>
            </section>

            <section class="section-bookings">

                <div class="section-bookings__title">
                    <h2 class="heading-secondary heading-secondary--gradient">Inlagda bokningar</h2>
                </div>
                
                <?php include 'booking-new.php';?>
            </section>

            <section class="section-info">
                <div class="section-info__title">
                    <h2 class="heading-secondary heading-secondary--black">Bra att veta</h2>
                </div>

                <div class="row">
                    <div class="col-1-of-3">
                        <div class="card-info">
                            <div class="card-info__heading">
                                <h3 class="heading-third u-margin-bottom-small">Hyra</h3>
                            </div>
                            <table>
                                <tr>
                                    <th>Antal veckor</th>
                                    <th>Vuxen</th>
                                    <th>Barn</th>
                                </tr>
                                <tr>
                                    <td>En vecka</td>
                                    <td>300 kr</td>
                                    <td>100 kr</td>
                                </tr>
                                <tr>
                                    <td>Upp till två veckor</td>
                                    <td>400 kr</td>
                                    <td>150 kr</td>
                                </tr>
                                <tr>
                                    <td>Två veckor</td>
                                    <td>500 kr</td>
                                    <td>200 kr</td>
                                </tr>

                                <tr class="tr--info">
                                    <td colspan="3">Uthyrning för vecka 3500:-</td>
                                </tr>

                                <tr class="tr--info">
                                    <td colspan="3">Pengarna insättes på konto: 5385 015 163-8, senast samma år.</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-1-of-3">
                        <div class="card-info">
                            <div class="card-info__heading">
                                <h3 class="heading-third u-margin-bottom-small">Sophämtning</h3>
                            </div>
                            <table>
                                <tr>
                                    <th>Hämtning</th>
                                    <th>Period</th>
                                    <th>Tisdag</th>
                                </tr>
                                <tr>
                                    <td>Brännbart</td>
                                    <td>14-dag</td>
                                    <td>Udda v</td>
                                </tr>
                                <tr>
                                    <td>Kompost</td>
                                    <td>14-dag</td>
                                    <td>Jämn v</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-1-of-3">
                        <div class="card-info">
                            <div class="card-info__heading">
                                 <h3 class="heading-third u-margin-bottom-small">Övrig info</h3>
                            </div>
                            <h4 class="heading-fourth">ÅVC Fårösund</h4>
                            <p class="paragraph paragraph--black">
                                Förutom vanligt avfall går det även att lämna betalsopsäckar.   
                                Grovavfall lämnas mot avgift, 50 kr (personbil) eller 100 kr (+släpvagn). Öppettider enligt nedan.
                            </p>
                            <br>
                            <table>
                                <tr>
                                    <th>Måndag</th>
                                    <th>Torsdag</th>
                                    <th>Lördag</th>
                                </tr>
                                <tr>
                                    <td>7-18</td>
                                    <td>7-15/18</td>
                                    <td>9-15</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-guestbook">
                <div class="section-guestbook__title">
                    <h2 class="heading-secondary heading-secondary--gradient">Gästbok</h2>
                </div>

                <div class="row">
                    <div class="col-1-of-2">
                        <div class="guestbook__form">
                            <div class="guestbook__header">Skriv inlägg</div>

                            <form action="" method="POST" id="guestBook">
                                <input type="text" name="Name" class="guestbook__form--input" placeholder="Namn" required>
                                <textarea name="Comment" class="guestbook__form--input" rows="5" placeholder="Skriv ditt inlägg här" required></textarea>
                                
                                <input type="submit" name="SubmitGuestPost" value="Posta inlägg" class="btn btn--book">
                        </div>
                    </div>
                    <div class="col-1-of-2 guestbook__commentSection">
                        <?php include 'guestbook.php';?>
                    </div>
                </div>
            </section>
        </main>

        <script>
            !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
        </script>
    </body>
</html>