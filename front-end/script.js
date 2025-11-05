

let tableBody =document.querySelector(".tb tbody"); // make sure your table has <tbody>

axios.get("../back-end/getscores.php")
  .then(response => {
    const scores = response.data; 

   

     

    scores.forEach(score => {
      let tr = document.createElement("tr");

      let tdUsername = document.createElement("td");
      tdUsername.textContent = score.username;
      tr.appendChild(tdUsername);

      let tdScore = document.createElement("td");
      tdScore.textContent = score.score;
      tr.appendChild(tdScore);

      let tdDuration = document.createElement("td");
      tdDuration.textContent = score.duration;
      tr.appendChild(tdDuration);

      tableBody.appendChild(tr);
    });
  })
 



 

