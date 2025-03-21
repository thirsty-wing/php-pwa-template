<?php

// TODO: figure out how to determine the language
// 1. user setting? - this should be default for logged-in users
// 2. http header? - logged out means we should go off of the http preferred language header
$lang = 'en';

?>
<!doctype html>
<html lang="<?= $lang ?>">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="/styles.css"/>
  </head>
  <body style="margin:0">
    <div class="top-bar">
      <div class="leftmatter">
        <a class="backlink" href="#">
          <img class="icon" src="/assets/arrow-left-svgrepo-com.svg" alt="back icon" />
        </a>
        <span class="name">Alerts</span>
      </div>
    </div>
    <nav class="nav-bar">
      <a class="link" href="/">
        <img class="icon" src="/assets/home-svgrepo-com.svg" alt="home icon"/>
        Home
      </a>
      <a class="link -selected" href="/alerts">
        <img class="icon" src="/assets/bell-svgrepo-com.svg" alt="alerts icon"/>
        Alerts
      </a>
      <a class="link" href="/settings">
        <img class="icon" src="/assets/cogs-svgrepo-com.svg" alt="settings icon"/>
        Settings
      </a>
      <a class="link" href="/profile">
        <img class="icon" src="/assets/user-svgrepo-com.svg" alt="profile icon"/>
        Profile
      </a>
      <a class="link" href="/menu">
        <img class="icon" src="/assets/bars-svgrepo-com.svg" alt="hamburger icon"/>
        More
      </a>
    </nav>
    <main class="main-content">
      <h1>This is the alerts page</h1>
      <p>Lorem ipsum dolor sit amet. Est dolor dolore At accusamus fugit sed illo beatae aut voluptatum voluptatem non consequatur repellat qui galisum voluptates ab quaerat minima. Vel eius explicabo et vero mollitia nam praesentium atque sit recusandae excepturi ea doloremque nisi ut maiores deserunt vel error nulla? Non voluptas quibusdam est nisi odio et nemo repellendus est sint nesciunt aut iste voluptatum. Aut debitis pariatur est debitis modi et suscipit quisquam sit suscipit autem.</p>
      <p>Ex numquam minus sit internos vero sed ullam reiciendis. Ea omnis internos ut expedita recusandae ut quia excepturi in aliquid laborum. Nam accusantium cupiditate id fugiat expedita qui fuga sint ex deleniti quis et molestiae voluptatem. Est consequuntur nisi quo molestiae ipsa aut rerum quasi.</p>
      <p>Ut sint vero aut animi enim aut iusto molestias. Qui dolorum itaque eos rerum dicta et pariatur animi qui praesentium vitae qui perferendis dolor? Ut deserunt ratione sit impedit doloremque quo saepe labore et adipisci tempore. Vel ullam harum et debitis laborum non quia quisquam aut error cumque in incidunt sint qui molestias quos.</p>
      <p>Et quia laudantium ea velit maxime sed aspernatur accusamus qui eaque sequi. Aut dolores dolore ea voluptas asperiores et assumenda ipsam At eaque placeat a fuga amet aut consequuntur sunt.</p>
      <p>Aut optio labore est porro dolorum eum repellat dolor non iure quam ut provident quia est accusamus cumque. Nam exercitationem voluptatum sit quod culpa eos quia accusamus eum modi rerum sit voluptas velit ut praesentium saepe. Est fugiat rerum aut quasi neque ad galisum odit qui Quis eius qui architecto possimus id provident ipsum? Est dolorum pariatur et aliquid repellat aut provident ullam ut totam necessitatibus qui fugiat repellendus?</p>
      <p>Nam temporibus minima et perferendis reiciendis est quibusdam dolore aut asperiores corrupti aut consequuntur Quis. Hic fugiat perferendis a officia minus ut excepturi tempore ea sint mollitia eos fugit architecto et consectetur omnis et architecto odit. Est distinctio quae ut numquam fugiat ut exercitationem cupiditate non porro error qui culpa nostrum ea itaque rerum et odit nihil.</p>
      <p>Lorem ipsum dolor sit amet. Est dolor dolore At accusamus fugit sed illo beatae aut voluptatum voluptatem non consequatur repellat qui galisum voluptates ab quaerat minima. Vel eius explicabo et vero mollitia nam praesentium atque sit recusandae excepturi ea doloremque nisi ut maiores deserunt vel error nulla? Non voluptas quibusdam est nisi odio et nemo repellendus est sint nesciunt aut iste voluptatum. Aut debitis pariatur est debitis modi et suscipit quisquam sit suscipit autem.</p>
      <p>Ex numquam minus sit internos vero sed ullam reiciendis. Ea omnis internos ut expedita recusandae ut quia excepturi in aliquid laborum. Nam accusantium cupiditate id fugiat expedita qui fuga sint ex deleniti quis et molestiae voluptatem. Est consequuntur nisi quo molestiae ipsa aut rerum quasi.</p>
      <p>Ut sint vero aut animi enim aut iusto molestias. Qui dolorum itaque eos rerum dicta et pariatur animi qui praesentium vitae qui perferendis dolor? Ut deserunt ratione sit impedit doloremque quo saepe labore et adipisci tempore. Vel ullam harum et debitis laborum non quia quisquam aut error cumque in incidunt sint qui molestias quos.</p>
      <p>Et quia laudantium ea velit maxime sed aspernatur accusamus qui eaque sequi. Aut dolores dolore ea voluptas asperiores et assumenda ipsam At eaque placeat a fuga amet aut consequuntur sunt.</p>
      <p>Aut optio labore est porro dolorum eum repellat dolor non iure quam ut provident quia est accusamus cumque. Nam exercitationem voluptatum sit quod culpa eos quia accusamus eum modi rerum sit voluptas velit ut praesentium saepe. Est fugiat rerum aut quasi neque ad galisum odit qui Quis eius qui architecto possimus id provident ipsum? Est dolorum pariatur et aliquid repellat aut provident ullam ut totam necessitatibus qui fugiat repellendus?</p>
      <p>Nam temporibus minima et perferendis reiciendis est quibusdam dolore aut asperiores corrupti aut consequuntur Quis. Hic fugiat perferendis a officia minus ut excepturi tempore ea sint mollitia eos fugit architecto et consectetur omnis et architecto odit. Est distinctio quae ut numquam fugiat ut exercitationem cupiditate non porro error qui culpa nostrum ea itaque rerum et odit nihil.</p>
      <p>Lorem ipsum dolor sit amet. Est dolor dolore At accusamus fugit sed illo beatae aut voluptatum voluptatem non consequatur repellat qui galisum voluptates ab quaerat minima. Vel eius explicabo et vero mollitia nam praesentium atque sit recusandae excepturi ea doloremque nisi ut maiores deserunt vel error nulla? Non voluptas quibusdam est nisi odio et nemo repellendus est sint nesciunt aut iste voluptatum. Aut debitis pariatur est debitis modi et suscipit quisquam sit suscipit autem.</p>
      <p>Ex numquam minus sit internos vero sed ullam reiciendis. Ea omnis internos ut expedita recusandae ut quia excepturi in aliquid laborum. Nam accusantium cupiditate id fugiat expedita qui fuga sint ex deleniti quis et molestiae voluptatem. Est consequuntur nisi quo molestiae ipsa aut rerum quasi.</p>
      <p>Ut sint vero aut animi enim aut iusto molestias. Qui dolorum itaque eos rerum dicta et pariatur animi qui praesentium vitae qui perferendis dolor? Ut deserunt ratione sit impedit doloremque quo saepe labore et adipisci tempore. Vel ullam harum et debitis laborum non quia quisquam aut error cumque in incidunt sint qui molestias quos.</p>
      <p>Et quia laudantium ea velit maxime sed aspernatur accusamus qui eaque sequi. Aut dolores dolore ea voluptas asperiores et assumenda ipsam At eaque placeat a fuga amet aut consequuntur sunt.</p>
      <p>Aut optio labore est porro dolorum eum repellat dolor non iure quam ut provident quia est accusamus cumque. Nam exercitationem voluptatum sit quod culpa eos quia accusamus eum modi rerum sit voluptas velit ut praesentium saepe. Est fugiat rerum aut quasi neque ad galisum odit qui Quis eius qui architecto possimus id provident ipsum? Est dolorum pariatur et aliquid repellat aut provident ullam ut totam necessitatibus qui fugiat repellendus?</p>
      <p>Nam temporibus minima et perferendis reiciendis est quibusdam dolore aut asperiores corrupti aut consequuntur Quis. Hic fugiat perferendis a officia minus ut excepturi tempore ea sint mollitia eos fugit architecto et consectetur omnis et architecto odit. Est distinctio quae ut numquam fugiat ut exercitationem cupiditate non porro error qui culpa nostrum ea itaque rerum et odit nihil.</p>
    </main>
  </body>
</html>
