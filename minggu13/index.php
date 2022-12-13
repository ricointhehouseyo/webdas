<?php
  $title = "Home";
  include("./components/header.php")
?>
<main>
  <section>
    <article>
      <h2 id="title"></h2>
      <img id="thumbnail" src="" alt="thumbnail" class="thumbnail">
      <i id="author"></i>
      <p id="article"></p>
      <button onclick="load()">Load</button>
    </article>
    <div>
      <button class="like-button">
        <span class="thumbsup">👍</span
        ><span class="like-indicator" id="likes">120.3k</span>
      </button>
    </div>
    <hr />
    <div class="comments" id="commentsField">
      <h2>Comments</h2>
      
    </div>
  </section>
  <aside>
    <h2>Archieve</h2>
    <ul>
      <li>LOMBA TARTIL AL-QUR'AN NASIONAL 2021</li>
      <li>Pengumuman Hasil Tes Santri Baru Aqobah International School</li>
      <li>Manfaat Group Beasiswa AIS International Office</li>
      <li>Pembagian Hasil MIR (Multiple Intelligence Reseach)</li>
    </ul>
  </aside>
</main>
<script>
  function load() {
    var xhr = new XMLHttpRequest();
    var data;
    xhr.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        data = JSON.parse(this.responseText);
        console.log(data);
        title.innerHTML = data.title;
        thumbnail.src = data.thumbnail;
        author.innerHTML = `${data.author}, ${data.created_at}`;
        article.innerHTML = data.content;
        likes.innerHTML = data.likes
        var comments = "";
        data.comments.forEach(comment => {
          comments += `
          <div class="comment">
            <div class="comment-head">
              <span class="username">${comment.name}</span
              ><span class="comment-date">${comment.created_at}</span>
            </div>
            <p class="comment-content">
              ${comment.content}
            </p>
          </div>
          `;
        });
        commentsField.innerHTML += comments;
      }
    };
    xhr.open("GET", "./api.php", true); 
    xhr.send();
  }
  
  //console.log(data);
</script>
<?php include("./components/footer.php") ?>