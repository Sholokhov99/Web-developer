class SliderGods {
    constructor(slideID) {
            // this.$slideID = document.getElementById(sliderID);

            this.$ID = slideID;
            // Лента с картинками
            this.$slideID = document.getElementById(slideID);
            // Текущий отступ
            this.$marginLeft = 0;
            // Количество слайдов
            this.$countSlide = ~~(this.$slideID.childNodes.length / 2);
            this.$slide = 0;
            this.maxMarginRight;
        }
        // ID = slideGods1
        //
        // Текущая ширина картинки
        //
    GetWidthSlide() {
            return document.querySelector("#" + this.$ID).childNodes[1].offsetWidth;
        }
        //
        //  Получение максимальной прокрутки сайта (всегда отрицательное значение)
        //
    GetMaxMargin() { return -1 * ((this.GetWidthSlide() + 10) * (this.$countSlide - 7)) }


    MoveSlide() {
            if (this.$marginLeft != !!!value) {

            }
        }
        //
        //  Следующий слайд
        //
    NextSlide() {
        if (this.$marginLeft != this.GetMaxMargin()) {
            this.$slideID.style.left = (this.$marginLeft -= this.GetWidthSlide() + 10) + "px";
            this.$slide++;
        } else {
            this.$slideID.style.left = ((this.$marginLeft = 0) + "px");
            this.$slide = 0;
        }
    }

    ReturnSlide() {
        if (this.$marginLeft != 0) {
            this.$slideID.style.left = (this.$marginLeft += this.GetWidthSlide() + 10) + "px";
            this.$slide--;
        } else {
            console.log(this.GetMaxMargin());
            this.$slideID.style.left = ((this.$marginLeft = this.GetMaxMargin()) + "px");
            this.$slide = this.$countSlide;
        }
    }
}