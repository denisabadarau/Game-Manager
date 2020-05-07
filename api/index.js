const express = require('express')

var db = require("./database.js")

const app = express()
const port = 3000


app.get('/', (req, res) => res.json({"message":"Ok"}))
app.get("/api/users", (req, res, next) => {
    var sql = "select * from user"
    var params = []
    db.all(sql, params, (err, rows) => {
        if (err) {
          res.status(400).json({"error":err.message});
          return;
        }
        res.json({
            "message":"success",
            "data":rows
        })
      });
});
app.listen(port, () => console.log(`Example app listening at http://localhost:${port}`))

