const series      = document.querySelectorAll('.sidebar .item');
const seriesTitle = document.querySelectorAll('[data-currentserie]')
// const allSerieName = Array.from(series).map(item => item.getAttribute('data-serie'));

series.forEach((serie) => {
    serie.addEventListener('click', () => {
        const serieName           = serie.getAttribute('data-serie');
        const containerSerieTitle = document.querySelector('[data-currentserie='+ serieName +']')

        // Remove all active
        series.forEach((el)      => el.classList.remove('active'));
        seriesTitle.forEach((el) => el.classList.remove('active'));

        // Add "active" to this
        serie.classList.add('active');
        containerSerieTitle.classList.add('active');

        console.log(containerSerieTitle);

        // Change wallpaper
        document.querySelector('body').style.backgroundImage = 'url("series/'+ serieName +'/wallpaper-'+ serieName +'.jpg")';
    });
});
