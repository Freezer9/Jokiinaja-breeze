<x-app-layout>

<header>
  <div class="container header__container">
    <div class="header__left">
      <h1 class="font-bold text-4xl">Welcome to JokiinAja</h1>
      <p>
        Ayo Jokiin akun anda disini!
      </p>
      <a href="#choose_game" class="btn btn-primary">Let's Go</a>
    </div>

    <div class="header__right">
      <div class="header__right-image">
        <img src="img/home.png" class="mb-4">
      </div>
    </div>
  </div>
</header>
<!-- END OF HEADER -->

<!-- CATEGORIES -->

<section class="categories">
  <div class="container categories__container">
    <div class="categories__left">
      <h1 class="font-bold text-2xl">Why Us?</h1>
      <p>
        Trusted and Very Reliable for Anyone for those of you who are confused about finding trusted jockey services and lots of price options
      </p>
      <a href="#" class="btn">Learn More</a>
    </div>

    <div class="categories__right">
      <article class="category">
        <span class="category__icon"><i class="uil uil-coins"></i></span>
        <h5 class="font-semibold">Premium Members</h5>
        <p>
          Get a very special limited members type for the first 100 person who Sign Up!
        </p>
      </article>

      <article class="category">
        <span class="category__icon"><i class="uil uil-money-bill-slash"></i></span>
        <h5 class="font-semibold">No Fee</h5>
        <p>
          No fee for 15 first transaction you've got.
        </p>
      </article>

      <article class="category">
        <span class="category__icon"><i class="uil uil-award-alt"></i></span>
        <h5 class="font-semibold">Special Reward</h5>
        <p>
          Get a special reward if your store is selling very well.
        </p>
      </article>

      <article class="category">
        <span class="category__icon"><i class="uil uil-money-withdrawal"></i></span>
        <h5 class="font-semibold">Get Advertised</h5>
        <p>
          Your store will be on top and got recommended by us If the rating is very good enough for the criteria.
        </p>
      </article>
    </div>
  </div>
</section>

<!-- END OF CATEGORIES -->

<!-- CHOOSE YOUR GAME SECTION -->

<section id="choose_game" class="games__section">
  <h2 class="font-bold text-3xl">Choose Your Game</h2>
  <div class="container game__container">
    <article class="game">
      <div class="game__image">
        <img src="img/pcgame.png">
      </div>
      <div class="game__info">
        <h4 class="font-semibold">PC Game</h4>
        <p>

        </p>
        <a href="game/{{ 'PC Game' }}" class="btn btn-primary">Browse Game</a>
      </div>
    </article>

    <article class="game">
      <div class="game__image">
        <img src="img/mobilegame.jpg">
      </div>
      <div class="game__info">
        <h4 class="font-semibold">Mobile Game</h4>
        <p>

        </p>
        <a href="game/{{ 'Mobile Game' }}" class="btn btn-primary">Browse Game</a>
      </div>
    </article>
  </div>
</section>

<!-- CHOOSE YOUR GAME SECTION END -->

<!-- FAQ SECTION -->
<section class="faqs">
  <h2 class="text-xl font-semibold">Frequently Asked Question</h2>
  <div class="container faqs__container">
    <article class="faq">
      <div class="faq__icon"><i class="uil uil-plus"></i></div>
      <div class="question__answer">
        <h4 class="font-medium">How do I know the right player?</h4>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit esse repellat deleniti molestias quod nulla harum tempora laboriosam doloribus fugiat et sit, autem reiciendis rerum quam architecto eum natus consequatur
        </p>
      </div>
    </article>

    <article class="faq">
      <div class="faq__icon"><i class="uil uil-plus"></i></div>
      <div class="question__answer">
        <h4 class="font-medium">Is this even trusted?</h4>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit esse repellat deleniti molestias quod nulla harum tempora laboriosam doloribus fugiat et sit, autem reiciendis rerum quam architecto eum natus consequatur
        </p>
      </div>
    </article>

    <article class="faq">
      <div class="faq__icon"><i class="uil uil-plus"></i></div>
      <div class="question__answer">
        <h4 class="font-medium">How the price is going?</h4>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit esse repellat deleniti molestias quod nulla harum tempora laboriosam doloribus fugiat et sit, autem reiciendis rerum quam architecto eum natus consequatur
        </p>
      </div>
    </article>

    <article class="faq">
      <div class="faq__icon"><i class="uil uil-plus"></i></div>
      <div class="question__answer">
        <h4 class="font-medium">Is it really trustable?</h4>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit esse repellat deleniti molestias quod nulla harum tempora laboriosam doloribus fugiat et sit, autem reiciendis rerum quam architecto eum natus consequatur
        </p>
      </div>
    </article>

    <article class="faq">
      <div class="faq__icon"><i class="uil uil-plus"></i></div>
      <div class="question__answer">
        <h4 class="font-medium">Why it has to be this website?</h4>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit esse repellat deleniti molestias quod nulla harum tempora laboriosam doloribus fugiat et sit, autem reiciendis rerum quam architecto eum natus consequatur
        </p>
      </div>
    </article>

    <article class="faq">
      <div class="faq__icon"><i class="uil uil-plus"></i></div>
      <div class="question__answer">
        <h4 class="font-medium">Can we even trust this website?</h4>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit esse repellat deleniti molestias quod nulla harum tempora laboriosam doloribus fugiat et sit, autem reiciendis rerum quam architecto eum natus consequatur
        </p>
      </div>
    </article>

  </div>
</section>



</x-app-layout>