class NepaliDate {
    constructor(){
        // get element
        this.topDate = document.querySelector('#topDate p');

        // nepali weekdays
        this.npWeek = ['आइतवार','सोमवार', 'मगलवार', 'बुधवार', 'बिहिवार', 'शुक्रवार', 'शनिवार'];

        // parameters
        this.day = mayur.np_date.day;
        this.month = mayur.np_date.nmonth;
        this.date = mayur.np_date.date;

        // methods
        this.prototype();
    }
		
	convertWeekDays() {
        switch(this.day) {
        case "Sunday":
            this.day = this.npWeek[0];
            break;
        case "Monday":
            this.day = this.npWeek[1];
            break;
        case "Tuesday":
            this.day = this.npWeek[2];
            break;
        case "Wednesday":
            this.day = this.npWeek[3];
            break;
        case "Thursday":
            this.day = this.npWeek[4];
            break;
        case "Friday":
            this.day = this.npWeek[5];
            break;
        case "Saturday":
            this.day = this.npWeek[6];
            break;	
        default:
            this.day = "";
            break;	
        }
        return this.day;
    }

    convertMonths() {
        switch(this.month) {
        case "Baishak":
            this.month = "बैसाख";
            break;
        case "Jestha":
            this.month = "जेठ";
            break;
        case "Asadh":
            this.month = "असार";
            break;
        case "Shrawn":
            this.month = "साउन";
            break;
        case "Bhadra":
            this.month = "भदौ";
            break;
        case "Ashwin":
            this.month = "असोज";
            break;
        case "kartik":
            this.month = "कार्तिक";
            break;	
        case "Mangshir":
            this.month = "मंसिर";
            break;
        case "Poush":
            this.month = "पुष";
            break;
        case "Magh":
            this.month = "माघ";
            break;
        case "Falgun":
            this.month = "फाल्गुन";
            break;
        case "Chaitra":
            this.month = "चैत";
            break;	
        default:
            this.month = "";
            break;	
        }
        return this.month;
    }

    convertDate() {
        switch(this.date) {
        case 1:
            this.date = "१";
            break;
        case 2:
            this.date = "२";
            break;
        case 3:
            this.date = "३";
            break;
        case 4:
            this.date = "४";
            break;
        case 5:
            this.date = "५";
            break;
        case 6:
            this.date = "६";
            break;
        case 7:
            this.date = "७";
            break;	
        case 8:
            this.date = "८";
            break;
        case 9:
            this.date = "९";
            break;
        case 10:
            this.date = "१०";
            break;
        case 11:
            this.date = "११";
            break;
        case 12:
            this.date = "१२";
            break;	
        case 13:
            this.date = "१३";
            break;
        case 14:
            this.date = "१४";
            break;
        case 15:
            this.date = "१५";
            break;
        case 16:
            this.date = "१६";
            break;
        case 17:
            this.date = "१७";
            break;
        case 18:
            this.date = "१८";
            break;
        case 19:
            this.date = "१९";
            break;
        case 20:
            this.date = "२०";
            break;
        case 21:
            this.date = "२१";
            break;
        case 22:
            this.date = "२२";
            break;
        case 23:
            this.date = "२३";
            break;
        case 24:
            this.date = "२४";
            break;
        case 25:
            this.date = "२५";
            break;
        case 26:
            this.date = "२६";
            break;
        case 27:
            this.date = "२७";
            break;
        case 28:
            this.date = "२८";
            break;
        case 29:
            this.date = "२९";
            break;
        case 30:
            this.date = "३०";
            break;
        case 31:
            this.date = "३१";
            break;
        case 32:
            this.date = "३२";
            break;	
        default:
            this.date = "";
            break;	
        }
        return this.date;
    }

    prototype() {
        // let year = mayur.np_date.year;
        let month = this.convertMonths();
        let date = this.convertDate();
        let day = this.convertWeekDays();

        this.topDate.textContent = month + ", " + date + " गते, " + day;        
    }
}

export default NepaliDate;