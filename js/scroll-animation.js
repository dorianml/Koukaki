const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry);
        if (entry.isIntersecting) {
            entry.target.classList.add('showObs');
            entry.target.classList.remove('hiddenObs');
        } else {
            entry.target.classList.remove('showObs');
            entry.target.classList.add('hiddenObs');
        }
    });
});

const hiddenElements = document.querySelectorAll('.hiddenObs');
hiddenElements.forEach((el) => observer.observe(el));



const observerSection = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log('entry');
        if (entry.isIntersecting) {
            entry.target.classList.add('showObsSection');
            entry.target.classList.remove('sectionObs');
        } else {
            entry.target.classList.remove('showObsSection');
            entry.target.classList.add('sectionObs');
        }
    });
});

const sectionElement = document.querySelectorAll('.sectionObs');
sectionElement.forEach((el) => observerSection.observe(el));

//

const delayedObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry);
        if (entry.isIntersecting) {
            entry.target.classList.add('showDelayedObs');
            entry.target.classList.remove('delayedObs');
        } else {
            entry.target.classList.remove('showDelayedObs');
            entry.target.classList.add('delayedObs');
        }
    });
});

const delayedElements = document.querySelectorAll('.delayedObs');
delayedElements.forEach((el) => delayedObserver.observe(el));



