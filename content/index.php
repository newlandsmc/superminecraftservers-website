<!doctype html>
<html lang="en">
  <head>
    <title>Super Minecraft Servers | The Best Minecraft Servers!</title>
    <meta name="description" content="Find the best Minecraft multiplayer servers to play on with cross-platform support for Bedrock and Java, running on the latest Minecraft version, and survival or creative gamemodes!" />
    <meta property="og:description" content="Find the best Minecraft multiplayer servers to play on with cross-platform support for Bedrock and Java, running on the latest Minecraft version, and survival or creative gamemodes!" />
    <meta name="twitter:description" content="Find the best Minecraft multiplayer servers to play on with cross-platform support for Bedrock and Java, running on the latest Minecraft version, and survival or creative gamemodes!" />
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/seo.html'); ?>
    <script async type="module" src="/assets/javascript/jquery-3.6.3.min.js"></script>
    <script async defer>
      function copyToClipboard(id,ip) {
        var aux = document.createElement("input");
        aux.setAttribute("value", ip);
        document.body.appendChild(aux);
        aux.select();
        document.execCommand("copy");
        document.body.removeChild(aux);
        document.getElementById(id).style.backgroundColor = "var(--action-taken)";
        document.getElementById('overlay-ip').innerHTML = aux.value;
        $('.overlay').addClass('active');
      }
      function overlayDismiss() {
        $('.overlay').removeClass('active');
      }
    </script>
    <script defer async type="module">
      import '/assets/javascript/jquery-3.6.3.min.js';
      $(document).ready(function () {
        jQuery.getJSON("https://api.mcsrvstat.us/2/play.newlandsmc.com",function(json){
          if (json.online == false) {
          }
          else {
            // success
            document.getElementById('pc1').innerHTML = json.players.online + '/50';
          }
        });
        jQuery.getJSON("https://api.mcsrvstat.us/2/play.semivanilla.com",function(json){
          if (json.online == false) {
          }
          else {
            // success
            document.getElementById('pc2').innerHTML = json.players.online + '/50';
          }
        });
      });
    </script>
  </head>
  <body id="landing-body">
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/header.html'); ?>
    <main>
      <section>
        <h1>Super Minecraft Servers!</h1>
        <p style="margin-top: 30px;">Find the best Minecraft multiplayer servers to play on with cross-platform support for Bedrock and Java, running on the latest Minecraft version, and survival or creative gamemodes! We host the best Minecraft servers offering a wide range of features and gamemodes. Find the right server for you in the list below!</p>
      </section>
      <section>
        <h2>Servers</h2>
        <table class="table-server-list">
          <thead>
            <tr>
              <th style="border-top-left-radius: 5px;" class="table-name">Name</th>
              <th class="table-banner">Server</th>
              <th class="table-players">Players</th>
              <th style="border-top-right-radius: 5px;" class="table-join">Join!</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th class="table-name"><a aria-label="Visit New Lands Survivals website" target="_blank" href="https://newlandsmc.com">New Lands Survival</a></th>
              <th class="table-banner">
                <a aria-label="Visit New Lands Survivals website" target="_blank" href="https://newlandsmc.com"><img src="https://minecraftservers.org/banners/6306021679363833.jpg" alt="New Lands Survival Minecraft server banner image"></a>
                <p class="table-ip">IP: play.newlandsmc.com</p>
                <p class="table-desc">New Lands Survival is a public survival server with a relaxing vibe, friendly community, and hard difficulty survival!</p>
              </th>
              <th id="pc1" class="table-players">10/50</th>
              <th class="table-join">
                <button type="button" class="copyip-button" id="cb1" onclick="copyToClipboard('cb1','play.newlandsmc.com')">Copy IP!</button>
              </th>
            </tr>
            <tr>
              <th style="border-bottom-left-radius: 5px;" class="table-name"><a aria-label="Visit SemiVanillas website" target="_blank" href="https://semivanilla.com">SemiVanilla</a></th>
              <th class="table-banner">
                <a aria-label="Visit SemiVanillas website" target="_blank" href="https://semivanilla.com"><img src="https://minecraftservers.org/banners/6485851679708534.jpg" alt="SemiVanilla Minecraft server banner image"></a>
                <p class="table-ip">IP: play.semivanilla.com</p>
                <p class="table-desc">SemiVanilla is a new Minecraft server with bare minimum plugins and modifications to the vanilla experience. The goal is to provide the best "semivanilla" experience out there.</p>
              </th>
              <th id="pc2" class="table-players">10/50</th>
              <th  style="border-bottom-right-radius: 5px;" class="table-join">
                <button type="button" class="copyip-button" id="cb2" onclick="copyToClipboard('cb2','play.semivanilla.com')">Copy IP!</button>
              </th>
            </tr>
          </tbody>
        </table>
      </section>
      <section class="more-content">
        <h2>What is New Lands Survival?</h2>
        <p>New Lands Survival is a public survival server with a relaxing vibe, friendly community, and hard difficulty survival!</p>
        <p>We protect your game with optional PVP, self-service land protection, and active admins ready to help.</p>
        <p>Every player starts somewhere new! We do not have a main spawn and start every player somewhere in the survival world, just like vanilla Minecraft!</p>
        <p>You can add custom enchantments to your items, level up your skills like an RPG, and enjoy quality-of-life improvements like sleep voting!</p>
      </section>
      <section class="more-content">
        <h2>What is SemiVanilla?</h2>
        <p>SemiVanilla is a new Minecraft server with bare minimum plugins and modifications to the vanilla experience. The goal is to provide the best "semivanilla" experience out there.</p>
        <p>On SemiVanilla every player starts somewhere new, there is no main spawn. This gives everyone the same vanilla-like experience when starting out - spawning somewhere random, with no idea what, or who, is around you. Ideally, the land will always be fresh and ready to harvest or build on.</p>
        <p>The world is 50,000 by 50,000 to give everyone room to spread out and give the best chance that every new player will start somewhere unique.</p>
      </section>
      <section id="join">
        <h2>How to Join a Minecraft server?</h2>
        <div>
          <h3>Java Edition</h3>
          <ol>
            <li>In Minecraft, go to <strong>Multiplayer</strong> and then <strong>Add Server</strong>.</li>
            <li>Enter a name, this can be anything you want!</li>
            <li>Enter "<span style="color: var(--confirm);">play.newlandsmc.com</span>" for the <strong>Server Address</strong>.</li>
            <li>Click <strong>Done</strong>.</li>
            <li>Select our server and join!</li>
          </ol>
        </div>
        <img src="/assets/images/join-java-edition-small.webp">
        <div>
          <h3>Bedrock Edition</h3>
          <ol>
            <li>In Minecraft, go to <strong>Play</strong> and then <strong>Servers</strong>.</li>
            <li>Scroll to the bottom and tap on <strong>Add Server</strong>.
            <li>Enter a name, this can be anything you want!</li>
            <li>Enter "<span style="color: var(--confirm);">play.newlandsmc.com</span>" for the <strong>Server Address</strong>. Leave the default port (19132).</li>
            <li>Tap <strong>Play</strong>!</li>
          </ol>
        </div>
        <img src="/assets/images/join-bedrock-edition-small.webp">
      </section>
      <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/ip-overlay.html'); ?>
    </main>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/footer.html'); ?>
  </body>
</html>
