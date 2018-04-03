<title> About Us Page | La Ravelle </title>
@extends('layout')
@section('content')

<div class="container">
    <div class="aboutus">
        <h1 class="aboutus-h1">
            About Us and FAQ
            <br>
            <img class="aboutus-tri last-tri" src="https://image.ibb.co/nk616F/Layer_1_copy_21.png" width="47" height="11" align="center">
        </h1>
        <h2 class="team-happen">The problem</h2>
        <article class="first-text">
            <p>
                "It’s very difficult to find a beauty product that suits you and your skin. Sometimes you just end up with whatever is recommended
                by the sales person. In order to find the right skincare product you have to test various ones based on your
                findings. Rather than relying on the sales person who might be biased in recommending you a certain product,
                we think the knowledge of all the women who have tried and tested skincare products is much more helpful to decide
                which product is right for our skin. Therefore we decided to come up with La Ravelle, a beauty review aggregator
                that sums up the number of ratings across various beauty websites, and gives back these aggregated numbers. In
                this way, we help women cut the decision time to buy her next favourite skincare item."
            </p>
        </article>
        <br>
        <div class="aboutus-tri">
            <img src="https://image.ibb.co/nk616F/Layer_1_copy_21.png" width="47" height="11" align="center">
        </div>


        <section id="team" class="two_fifth">
            <h2 class="team-happen">The team who made it happen</h2>
            <ul class="list-style">
              <li class="team">
                <figure class="clear"><img class="team-images" src="{{ asset('img/mireille.jpg') }}" alt="">
                  <figcaption>
                    <p class="team_name">Mireille Bobbert</p>
                    <p class="team_description">I'm into skincare, word-of-mouth and scraping so this project was a no-brainer.</p>
                  </figcaption>
                </figure>
              </li>
              <li class="team">
                <figure class="clear"><img class="team-images" src="{{ asset('img/fadz.JPG') }}" alt="">
                  <figcaption>
                    <p class="team_name">Fadz Whyte</p>
                    <p class="team_description">I wanted to work on this tool because I knew it could solve my problems in buying skincare products.</p>
                  </figcaption>
                </figure>
              </li>
              <li class="team last-team">
                <figure class="clear"><img class="team-images" src="{{ asset('img/eva.jpg') }}" alt="">
                  <figcaption>
                    <p class="team_name">Eva Kroon</p>
                    <p class="team_description">I loved working with my team on this project as it was a lot of fun! Couldn't have asked for better teammates.</p>
                  </figcaption>
                </figure>
              </li>

            </ul>
        </section>

         <div class="aboutus-tri last-tri">
            <img src="https://image.ibb.co/nk616F/Layer_1_copy_21.png" width="47" height="11" align="center">
        </div>

        <section class="faq last-team">
            <h2 class="team-happen">FAQ</h2>

            <h4>Which websites do you scrape from?</h4>

              <p><a href="https://www.sephora.com/" target="_blank">Sephora</a> and <a href="https://www.influenster.com/" target="_blank">Influenster</a></p>

            <h4>What is an aggregate rating?</h4>

              <p><b>Aggregated number of ratings per product</b> = # of reviews Sephora + # of reviews Influenster</p>

              <p><b>Aggregated average rating per product</b> =</p>

              <p>(Average rating Sephora * # of reviews Sephora + Average rating Influenster * # of reviews Influenster) / Aggregated number of ratings per product</p>


            <h4>What do we scrape?</h4>

              <p>
                <ul class="list-style">
                    <li>Basic product information (title, brand name, price, av. rating + number of ratings)</li>
                    <li>Specific product information (product description)</li>
                    <li>Images</li>
                    <li>Reviews from Sephora (last 100 reviews per product)</li>
                    <ul class="list-style">
                      <li><b>Recommended count percentage</b> = the # of people who recommended the products / the # of Sephora ratings for that product</li>
                    </ul>
                </ul>
              </p>

            <h4>When do we match?</h4>

              <p>When Sephora and Influenster show <i>the same product</i> on their website.</p>

        </section>
    </div>
</div>



@endsection