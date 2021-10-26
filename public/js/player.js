var player = videojs('video')
var viewedLog = false

player.on('timeupdate', function () {
    var percentagePlayed = Math.ceil(player.currentTime()/player.duration() * 100);

    if (percentagePlayed>5 && !viewedLog) {
        axios.put('/videos/' + window.CURRENT_VIDEO)
        viewedLog = true
    }
})
