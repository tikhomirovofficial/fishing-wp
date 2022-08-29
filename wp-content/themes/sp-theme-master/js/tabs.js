$(document).ready(() => {
    const tabs = document.querySelectorAll('.prices__tabs-item')
    const tabContents = document.querySelectorAll('.price__tab-content')


    const hideAllTabs = () => {
        tabContents.forEach(item => {
            item.classList.remove('prices__tabs-content-showed')
        })
    }
    const disableActivesTabs = () => {
        tabs.forEach(item => {
            item.classList.remove('prices__tab-active')
        })
    }
    tabs.forEach((tab) => {
        tab.addEventListener('click', (e) => {
            const tabId = e.target.getAttribute('data-tab')
            hideAllTabs()
            const tabCurrent = document.getElementById(`tab_${tabId}`)
            tabCurrent.classList.add('prices__tabs-content-showed')
            disableActivesTabs()
            e.target.classList.add('prices__tab-active')
        })
    })

})

