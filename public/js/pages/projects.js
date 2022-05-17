$(document).on('click', '.show-modal-project', function (event) {
    try {
        event.preventDefault();

        const projectObj = JSON.parse(event.target.dataset.project)
        const imageTag = document.querySelector(`#image-project-${projectObj.id}`)
        const modal = $('#projectModal');

        modal.find('.image').attr('src', imageTag.src)
        modal.find('.resume').text(projectObj.resume)
        modal.find('.client').text(projectObj.client)
        modal.find('.power').text(projectObj.power_system+'kWp')
        modal.find('.economy-money').text(projectObj.economy_money)
        modal.find('.economy-co2').text(projectObj.economy_co2.replace(/\.00$/,''))

        modal.modal('show')
    } catch (e) {
        console.log(e)
        console.log('Falha ao setar os dados na modal')
    }
})
