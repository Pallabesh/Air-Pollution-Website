/* key = oizHwSOQSrfpd4WQb3yGLTAYMXwf8bFR -- key from accuweather */
/* key that we get from city request -- 189790 */
let p = fetch("http://dataservice.accuweather.com/locations/v1/cities/delhi")
p.then((value1) => {
    return value1.json()
}).then((value2) => {
    console.log(value2)
})