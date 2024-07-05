const nextBtn = $('[data-action="next"]');
const prevBtn = $('[data-action="prev"]');
const createBtn = $('[data-action="create"]');
const tabs = $('ul.form-wizard a[data-tab-toggle]');
const tabContents = $('.tab-content .tab-pane');

let currentTab = 1;

nextBtn.on('click', function(e) {
    e.preventDefault();
    if (currentTab < tabContents.length) {
        currentTab++;
        switchTab(currentTab);
    }
});

prevBtn.on('click', function(e) {
    e.preventDefault();
    if (currentTab > 1) {
        currentTab--;
        switchTab(currentTab);
    }
});

const switchTab = (tabIndex) => {
    activeHeaderTab(tabIndex);
    tabs.removeClass('active');
    tabContents.addClass('hidden');
    tabContents.each(function() {
        if ($(this).data('tab-id') == tabIndex) {
            $(this).removeClass('hidden').addClass('active');
            createBtn.addClass('hidden');
        }
    });
    updateButtonState();
};

const updateButtonState = () => {
    if (currentTab == tabContents.length) {
        nextBtn.addClass('choices__item');
        createBtn.removeClass('hidden');
        prevBtn.removeClass('choices__item');
    } else {
        nextBtn.removeClass('choices__item');
        prevBtn.addClass('choices__item');
    }
};

const activeHeaderTab = (index) => {
    $('.form-wizard li a').each((_, ev) => {
        $(ev).data('tab-id') == index ? $(ev).parent().addClass('active') : $(ev).parent().removeClass('active');
    });
};
