const express = require("express")
const cors = require("cors")
const Invoice = require("./pdf")
const app = express()


app.use(cors())
app.use('/file', express.static('./files'))
app.get('/', (req, res) => res.send('halo'))
app.get('/pdf', async (req, res) => {
    const name = req.query.name
    const instance = new Invoice()
    await instance.pdf(name)
    res.send(`${req.protocol}://${req.headers.host}/file/${name}.pdf`)
})
app.listen(9999, () => console.log("server running on port 9999"))
