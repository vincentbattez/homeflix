const series           = document.querySelectorAll('.sidebar .item');
const seriesTitle      = document.querySelectorAll('[data-title]')
const seriesWallpaper  = document.querySelectorAll('[data-wallpaper]')
const episodeContainer = document.querySelectorAll('.episode')
// const allSerieName = Array.from(series).map(item => item.getAttribute('data-serie'));

series.forEach((serie) => {
    serie.addEventListener('click', () => {
        if(!serie.classList.contains('active')) {
            // Variables
            const serieName              = serie.getAttribute('data-serie');
            const containerSerieTitle    = document.querySelector('[data-title='+ serieName +']')
            const containerSerieWallaper = document.querySelector('[data-wallpaper='+ serieName +']')
            
            // Remove all active
            series.forEach(           (el) => el.classList.remove('active'));
            seriesTitle.forEach(      (el) => el.classList.remove('active'));
            seriesWallpaper.forEach(  (el) => el.classList.remove('active'));
            episodeContainer.forEach( (el) => el.classList.remove('active'));

            // Add "active" to this
            serie                 .classList.add('active');
            containerSerieTitle   .classList.add('active');
            containerSerieWallaper.classList.add('active');
        }
    });
});




const episodes = document.querySelectorAll('.episode-js');

// Change episode
episodes.forEach((episode) => {
    episode.addEventListener('click', () => {
        if(!episode.classList.contains('active')) {
            const Eserie   = episode.getAttribute('data-nSerie');
            const Esaison  = episode.getAttribute('data-nSaison');
            const Eepisode = episode.getAttribute('data-nEpisode');

            // Remove all active
            episodes.forEach((el) => el.classList.remove('active'));

            // Add "active" to this
            episode.classList.add('active');
            
            // launchEpisode(Eserie, Esaison, Eepisode);
        }
    });
});
