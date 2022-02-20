require('./bootstrap');
window.Vue = require('vue').default;

const reserve = new Vue({
    el: '#reserve',
    data: () => ({
        applyPointInpt: 0,
        applyPointAfter: '',
        localPoint: '',
        advancePoint: '',
        ownedPoint: '',
        totalPrice: '',
        cities: '',
        email: 'normal',
        gest: '',
        timeClass: '',
        postalFirstClass: '',
        postalSecondClass: '',
        PrefecturesClass: '',
        citiesClass: '',
        townClass: '',
        telFirstClass: '',
        telSecondClass: '',
        telThirdClass: '',
        emergencyFirstClass: '',
        emergencySecondClass: '',
        emergencyThirdClass: '',
        emailConfClass: '',
        emailClass: '',
        isTime: false,
        isPointApply: false,
        isApplyPointError: false,
        isPrefectures: false,
        isPostalFirst: false,
        isPostalSecond: false,
        isTelFirst: false,
        isTelSecond: false,
        isTelThird: false,
        isTown: false,
        isCities: false,
        isEmail: false,
        isEmailConf: false,
        isEmailAddress: false,
        isEmergencyFirst: false,
        isEmergencySecond: false,
        isEmergencyThird: false,
        isCheckError: false,
    }),
    watch: {

    },
    computed: {},
    mounted() {

        //ポイント適用のoldでない場合
        if (!window.Laravel.poinUse) {
            let after_apply_price = window.Laravel.total - this.applyPointInpt;
            this.ownedPoint = window.Laravel.point;

            this.totalPrice = after_apply_price;

            this.advancePoint = Math.floor(after_apply_price * 0.01);
            this.localPoint = Math.floor(after_apply_price * 0.005);

        } else {
            this.applyPointInpt = window.Laravel.poinUse;
            this.ownedPoint = window.Laravel.point - this.applyPointInpt;

            let old_apply_price = window.Laravel.total - window.Laravel.poinUse

            this.totalPrice = old_apply_price;
            if (window.Laravel.poinUse !== '0' && window.Laravel.poinUse !== null) {
                this.applyPointAfter = window.Laravel.poinUse;
                this.isPointApply = true;
            }

            this.advancePoint = Math.floor(old_apply_price * 0.01);
            this.localPoint = Math.floor(old_apply_price * 0.005);
        }

        //初回読み込み必須項目、バリテーションエラーCSS制御
        if (!!window.Laravel.timeError) {
            this.timeClass = 'checkError';
        } else if (window.Laravel.times === null) {
            this.timeClass = 'required';
        }

        if (!!window.Laravel.postalFirstError) {
            this.postalFirstClass = 'checkError';
        }

        if (!!window.Laravel.postalSecondError) {
            this.postalSecondClass = 'checkError';
        }

        if (!!window.Laravel.addressPrefecturesError) {
            this.PrefecturesClass = 'checkError';
        }

        if (!!window.Laravel.addressCitiesError) {
            this.citiesClass = 'checkError';
        }

        if (!!window.Laravel.addressTownError) {
            this.townClass = 'checkError';
        }

        if (!!window.Laravel.telFirstError) {
            this.telFirstClass = 'checkError';
        }

        if (!!window.Laravel.telSecondError) {
            this.telSecondClass = 'checkError';
        }

        if (!!window.Laravel.telThirdError) {
            this.telThirdClass = 'checkError';
        }

        if (!!window.Laravel.emergencyFirstError) {
            this.emergencyFirstClass = 'checkError';
        }

        if (!!window.Laravel.emergencySecondError) {
            this.emergencySecondClass = 'checkError';
        }

        if (!!window.Laravel.emergencyThirdError) {
            this.emergencyThirdClass = 'checkError';
        }

        if (!!window.Laravel.emailError && window.Laravel.emailOption == 'next') {
            this.emailClass = 'checkError';
        }

        if (!!window.Laravel.emailConfError && window.Laravel.emailOption == 'next') {
            this.emailConfClass = 'checkError';
        }

        if (window.Laravel.emailOption == 'next') {
            this.email = 'next';
        }
    },
    methods: {
        applyPoint() {
            this.isApplyPointError = false;

            if (this.applyPointInpt === 0 || this.applyPointInpt === '') {
                this.ownedPoint = window.Laravel.point;
                this.isPointApply = false;
            } else {
                this.isPointApply = true;
            }

            //100単位または保有ポイント以上の入力でない場合
            if (!!Number.isInteger(this.applyPointInpt / 100) && this.applyPointInpt <= window.Laravel.point) {
                this.ownedPoint = window.Laravel.point - this.applyPointInpt;
                this.applyPointAfter = this.applyPointInpt;
                console.log(this.applyPointInpt)

                let after_apply_price = window.Laravel.total - this.applyPointInpt;
                this.totalPrice = after_apply_price;
                this.advancePoint = Math.floor(after_apply_price * 0.01);
                this.localPoint = Math.floor(after_apply_price * 0.005);

            } else {
                this.isApplyPointError = true;
                this.isPointApply = false;
            }
        },
        timeFocus() {
            this.isTime = true;
        },
        postalFirstFocus() {
            this.isPostalFirst = true;
        },
        postalSecondFocus() {
            this.isPostalSecond = true;
        },
        prefecturesFocus() {
            this.isPrefectures = true;
        },
        citiesFocus() {
            this.isCities = true;
        },
        townFocus() {
            this.isTown = true;
        },
        telFirstFocus() {
            this.isTelFirst = true;
        },
        telSecondFocus() {
            this.isTelSecond = true;
        },
        telThirdFocus() {
            this.isTelThird = true;
        },
        emergencyFirstFocus() {
            this.isEmergencyFirst = true;
        },
        emergencySecondFocus() {
            this.isEmergencySecond = true;
        },
        emergencyThirdFocus() {
            this.isEmergencyThird = true;
        },
        emailFocus() {
            this.isEmail = true;
        },
        emailConfFocus() {
            this.isEmailConf = true;
        },
        onClick() {
            AjaxZip3.zip2addr('postal_code_first', 'postal_code_second', 'address_prefectures', 'address_cities', 'address_town');
            AjaxZip3.onSuccess = () =>
                setTimeout(() => {
                    this.$refs.cities.focus();
                    this.$refs.prefectures.focus();
                }, 10)
            AjaxZip3.onFailure = () => this.$refs.addresButton.innerHTML = '入力された郵便番号に該当する住所が検索できませんでした。直接住所を入力してください。';
        }
    }
});
