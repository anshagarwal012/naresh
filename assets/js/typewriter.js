const carouselText = [
  { text: "Our vision is to assist New Age technology startups     in building the next future.", color: "red" },
  { text: "Our goal is to create value for our clients, and we operate with principles of excellence and trust.", color: "red" }
]
$(document).ready(async function () {
  carousel(carouselText, ".heade-h2")
});

async function typeSentence(sentence, eleRef, delay = 50) {
  const letters = sentence.split("");
  let i = 0;
  while (i < letters.length) {
    await waitForMs(delay);
    $(eleRef).append(letters[i]);
    i++
  }
  return;
}

async function deleteSentence(eleRef) {
  const sentence = $(eleRef).html();
  const letters = sentence.split("");
  let i = 0;
  while (letters.length > 0) {
    await waitForMs(50);
    letters.pop();
    $(eleRef).html(letters.join(""));
  }
}

async function carousel(carouselList, eleRef) {
  var i = 0;
  await typeSentence(carouselList[0].text, eleRef);
  $(eleRef).append('<br><br>');
  await waitForMs(5000);
  await typeSentence(carouselList[1].text, eleRef);
}

function waitForMs(ms) {
  return new Promise(resolve => setTimeout(resolve, ms))
}
