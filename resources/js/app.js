const series          = document.querySelectorAll('.sidebar .item');
const seriesTitle     = document.querySelectorAll('[data-title]')
const seriesWallpaper = document.querySelectorAll('[data-wallpaper]')
// const allSerieName = Array.from(series).map(item => item.getAttribute('data-serie'));

series.forEach((serie) => {
    serie.addEventListener('click', () => {
        // Variables
        const serieName              = serie.getAttribute('data-serie');
        const containerSerieTitle    = document.querySelector('[data-title='+ serieName +']')
        const containerSerieWallaper = document.querySelector('[data-wallpaper='+ serieName +']')
        
        // Remove all active
        series.forEach(          (el) => el.classList.remove('active'));
        seriesTitle.forEach(     (el) => el.classList.remove('active'));
        seriesWallpaper.forEach( (el) => el.classList.remove('active'));

        // Add "active" to this
        serie                 .classList.add('active');
        containerSerieTitle   .classList.add('active');
        containerSerieWallaper.classList.add('active');
    });
});