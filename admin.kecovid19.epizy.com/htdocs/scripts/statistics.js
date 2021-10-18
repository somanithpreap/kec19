const jsonInput = document.getElementById('json-input');
const populateBtn = document.getElementById('populate-btn');
const saveDataBtn = document.getElementById('save-btn');
const table = document.getElementsByTagName('table')[0];

function print(msg) {
    console.log(msg);
}

function getData() {
    return JSON.parse(jsonInput.value);
}

/**
 * 
 * @param {string} numStr 
 */
function cleanNumString(numStr) {
    let _numstr = numStr;
    var output = _numstr.replace(',', '');
    output = output.replace('-', '');
    return parseInt(output);
}

class Data {
    constructor(data) {
        this.head = data.head;
        this.body = data.body;
        this.cols = data.cols;
        this.rows = data.rows;
    }

    /**
     * 
     * @param {number} index 
     */
    getDataByIndex(index) {
        return this.body[index];
    }

    /**
     * 
     * @param {string} property 
     * @param {*} value 
     */
    getDataByPropertyValue(property, value) {
        var output = { location: value, confirmed: '0', recovered: '0', deaths: '0' }
        for (let i = 0; i < this.body.length; i++) {
            const data = this.getDataByIndex(i);
            if (data[property] === value) {
                output = data;
                break;
            }
        }
        return output;
    }
}

/**
 * 
 * @param {number} row 
 * @param {Data} data 
 */
function injectData(rowNum, data) {
    const rowElement = document.getElementById('row' + rowNum);
    const row = {
        country: rowElement.children.item(0).textContent,
        confirmed: rowElement.children.item(1).children[0],
        recovered: rowElement.children.item(2).children[0],
        deaths: rowElement.children.item(3).children[0]
    };

    const confirmed = cleanNumString(data.confirmed);
    const recovered = cleanNumString(data.recovered);
    const deaths = cleanNumString(data.deaths);
    row.confirmed.value = confirmed;
    row.recovered.value = recovered;
    row.deaths.value = deaths;
    console.log(data);
}

/**
 * 
 * @param {Data} data 
 */
function populate(data) {
    injectData(1, data.getDataByPropertyValue('location', "Cambodia"));
    injectData(2, data.getDataByPropertyValue('location', "Ghana"));
    injectData(3, data.getDataByPropertyValue('location', "Canada"));
    injectData(4, data.getDataByPropertyValue('location', "Qatar"));
    injectData(5, data.getDataByPropertyValue('location', "Gabon"));
    injectData(6, data.getDataByPropertyValue('location', "Cape Verde"));
    injectData(7, data.getDataByPropertyValue('location', "Cameroon"));
    injectData(8, data.getDataByPropertyValue('location', "Kazakhstan"));
    injectData(9, data.getDataByPropertyValue('location', "Republic of the Congo"));
    injectData(10, data.getDataByPropertyValue('location', "Democratic Republic of the Congo"));
    injectData(11, data.getDataByPropertyValue('location', "Côte d'Ivoire"));
    injectData(12, data.getDataByPropertyValue('location', "Comoros"));
    injectData(13, data.getDataByPropertyValue('location', "North Korea"));
    injectData(14, data.getDataByPropertyValue('location', "South Korea"));
    injectData(15, data.getDataByPropertyValue('location', "Costa Rica"));
    injectData(16, data.getDataByPropertyValue('location', "Colombia"));
    injectData(17, data.getDataByPropertyValue('location', "Kyrgyzstan"));
    injectData(18, data.getDataByPropertyValue('location', "Kenya"));
    injectData(19, data.getDataByPropertyValue('location', "Greece"));
    injectData(20, data.getDataByPropertyValue('location', "Grenada"));
    injectData(21, data.getDataByPropertyValue('location', "Croatia"));
    injectData(22, data.getDataByPropertyValue('location', "Guatemala"));
    injectData(23, data.getDataByPropertyValue('location', "The Gambia"));
    injectData(24, data.getDataByPropertyValue('location', "Guinea"));
    injectData(25, data.getDataByPropertyValue('location', "Guinea-Bissau"));
    injectData(26, data.getDataByPropertyValue('location', "Equatorial Guinea"));
    injectData(27, data.getDataByPropertyValue('location', "Kiribati"));
    injectData(28, data.getDataByPropertyValue('location', "Cuba"));
    injectData(29, data.getDataByPropertyValue('location', "Guyana"));
    injectData(30, data.getDataByPropertyValue('location', "Kuwait"));
    injectData(31, data.getDataByPropertyValue('location', "Georgia"));
    injectData(32, data.getDataByPropertyValue('location', "China"));
    injectData(33, data.getDataByPropertyValue('location', "Chad"));
    injectData(34, data.getDataByPropertyValue('location', "Czechia"));
    injectData(35, data.getDataByPropertyValue('location', "Japan"));
    injectData(36, data.getDataByPropertyValue('location', "Djibouti"));
    injectData(37, data.getDataByPropertyValue('location', "Chile"));
    injectData(38, data.getDataByPropertyValue('location', "Denmark"));
    injectData(39, data.getDataByPropertyValue('location', "Dominica"));
    injectData(40, data.getDataByPropertyValue('location', "Dominican Republic"));
    injectData(41, data.getDataByPropertyValue('location', "Namibia"));
    injectData(42, data.getDataByPropertyValue('location', "Nauru"));
    injectData(43, data.getDataByPropertyValue('location', "Tanzania"));
    injectData(44, data.getDataByPropertyValue('location', "Tajikistan"));
    injectData(45, data.getDataByPropertyValue('location', "Tonga"));
    injectData(46, data.getDataByPropertyValue('location', "Togo"));
    injectData(47, data.getDataByPropertyValue('location', "Turkey"));
    injectData(48, data.getDataByPropertyValue('location', "Turkmenistan"));
    injectData(49, data.getDataByPropertyValue('location', "Thailand"));
    injectData(50, data.getDataByPropertyValue('location', "Timor-Leste"));
    injectData(51, data.getDataByPropertyValue('location', "Tunisia"));
    injectData(52, data.getDataByPropertyValue('location', "Tuvalu"));
    injectData(53, data.getDataByPropertyValue('location', "Trinidad and Tobago"));
    injectData(54, data.getDataByPropertyValue('location', "Nicaragua"));
    injectData(55, data.getDataByPropertyValue('location', "Niger"));
    injectData(56, data.getDataByPropertyValue('location', "Nigeria"));
    injectData(57, data.getDataByPropertyValue('location', "New Zealand"));
    injectData(58, data.getDataByPropertyValue('location', "Nepal"));
    injectData(59, data.getDataByPropertyValue('location', "Norway"));
    injectData(60, data.getDataByPropertyValue('location', "Bangladesh"));
    injectData(61, data.getDataByPropertyValue('location', "Pakistan"));
    injectData(62, data.getDataByPropertyValue('location', "Panama"));
    injectData(63, data.getDataByPropertyValue('location', "Papua New Guinea"));
    injectData(64, data.getDataByPropertyValue('location', "Paraguay"));
    injectData(65, data.getDataByPropertyValue('location', "Palau"));
    injectData(66, data.getDataByPropertyValue('location', "Poland"));
    injectData(67, data.getDataByPropertyValue('location', "Peru"));
    injectData(68, data.getDataByPropertyValue('location', "Bulgaria"));
    injectData(69, data.getDataByPropertyValue('location', "Burundi"));
    injectData(70, data.getDataByPropertyValue('location', "Barbados"));
    injectData(71, data.getDataByPropertyValue('location', "Bahrain"));
    injectData(72, data.getDataByPropertyValue('location', "France"));
    injectData(73, data.getDataByPropertyValue('location', "The Bahamas"));
    injectData(74, data.getDataByPropertyValue('location', "Botswana"));
    injectData(75, data.getDataByPropertyValue('location', "Bolivia"));
    injectData(76, data.getDataByPropertyValue('location', "Bosnia and Herzegovina"));
    injectData(77, data.getDataByPropertyValue('location', "Burkina Faso"));
    injectData(78, data.getDataByPropertyValue('location', "Benin"));
    injectData(79, data.getDataByPropertyValue('location', "Belize"));
    injectData(80, data.getDataByPropertyValue('location', "Belarus"));
    injectData(81, data.getDataByPropertyValue('location', "Belgium"));
    injectData(82, data.getDataByPropertyValue('location', "Brunei"));
    injectData(83, data.getDataByPropertyValue('location', "Brazil"));
    injectData(84, data.getDataByPropertyValue('location', "Portugal"));
    injectData(85, data.getDataByPropertyValue('location', "Bhutan"));
    injectData(86, data.getDataByPropertyValue('location', "Madagascar"));
    injectData(87, data.getDataByPropertyValue('location', "Morocco"));
    injectData(88, data.getDataByPropertyValue('location', "Mali"));
    injectData(89, data.getDataByPropertyValue('location', "Maldives"));
    injectData(90, data.getDataByPropertyValue('location', "Malta"));
    injectData(91, data.getDataByPropertyValue('location', "Marshall"));
    injectData(92, data.getDataByPropertyValue('location', "North Macedonia"));
    injectData(93, data.getDataByPropertyValue('location', "Malawi"));
    injectData(94, data.getDataByPropertyValue('location', "Malaysia"));
    injectData(95, data.getDataByPropertyValue('location', "Mexico"));
    injectData(96, data.getDataByPropertyValue('location', "Mongolia"));
    injectData(97, data.getDataByPropertyValue('location', "Montenegro"));
    injectData(98, data.getDataByPropertyValue('location', "Moldova"));
    injectData(99, data.getDataByPropertyValue('location', "Monaco"));
    injectData(100, data.getDataByPropertyValue('location', "Mauritania"));
    injectData(101, data.getDataByPropertyValue('location', "Mauritius"));
    injectData(102, data.getDataByPropertyValue('location', "Mozambique"));
    injectData(103, data.getDataByPropertyValue('location', "Micronesia"));
    injectData(104, data.getDataByPropertyValue('location', "Myanmar (Burma)"));
    injectData(105, data.getDataByPropertyValue('location', "Yemen"));
    injectData(106, data.getDataByPropertyValue('location', "Romania"));
    injectData(107, data.getDataByPropertyValue('location', "Rwanda"));
    injectData(108, data.getDataByPropertyValue('location', "Russia"));
    injectData(109, data.getDataByPropertyValue('location', "Liechtenstein"));
    injectData(110, data.getDataByPropertyValue('location', "Lithuania"));
    injectData(111, data.getDataByPropertyValue('location', "Lebanon"));
    injectData(112, data.getDataByPropertyValue('location', "Libya"));
    injectData(113, data.getDataByPropertyValue('location', "Liberia"));
    injectData(114, data.getDataByPropertyValue('location', "Luxembourg"));
    injectData(115, data.getDataByPropertyValue('location', "Vanuatu"));
    injectData(116, data.getDataByPropertyValue('location', "Vietnam"));
    injectData(117, data.getDataByPropertyValue('location', "Venezuela"));
    injectData(118, data.getDataByPropertyValue('location', "United States"));
    injectData(119, data.getDataByPropertyValue('location', "United Kingdom"));
    injectData(120, data.getDataByPropertyValue('location', "Cyprus"));
    injectData(121, data.getDataByPropertyValue('location', "Zimbabwe"));
    injectData(122, data.getDataByPropertyValue('location', "Syria"));
    injectData(123, data.getDataByPropertyValue('location', "Sweden"));
    injectData(124, data.getDataByPropertyValue('location', "Sudan"));
    injectData(125, data.getDataByPropertyValue('location', "South Sudan"));
    injectData(126, data.getDataByPropertyValue('location', "Suriname"));
    injectData(127, data.getDataByPropertyValue('location', "Serbia"));
    injectData(128, data.getDataByPropertyValue('location', "San Marino"));
    injectData(129, data.getDataByPropertyValue('location', "Jamaica"));
    injectData(130, data.getDataByPropertyValue('location', "Samao"));
    injectData(131, data.getDataByPropertyValue('location', "São Tomé and Príncipe"));
    injectData(132, data.getDataByPropertyValue('location', "Saint Kitts and Nevis"));
    injectData(133, data.getDataByPropertyValue('location', "Saint Lucia"));
    injectData(134, data.getDataByPropertyValue('location', "Saint Vincent and the Grenadines"));
    injectData(135, data.getDataByPropertyValue('location', "Singapore"));
    injectData(136, data.getDataByPropertyValue('location', "Somalia"));
    injectData(137, data.getDataByPropertyValue('location', "Solomon"));
    injectData(138, data.getDataByPropertyValue('location', "Sierra Leone"));
    injectData(139, data.getDataByPropertyValue('location', "Senegal"));
    injectData(140, data.getDataByPropertyValue('location', "Seychelles"));
    injectData(141, data.getDataByPropertyValue('location', "Sri Lanka"));
    injectData(142, data.getDataByPropertyValue('location', "Slovakia"));
    injectData(143, data.getDataByPropertyValue('location', "Slovenia"));
    injectData(144, data.getDataByPropertyValue('location', "Switzerland"));
    injectData(145, data.getDataByPropertyValue('location', "Zambia"));
    injectData(146, data.getDataByPropertyValue('location', "Hungary"));
    injectData(147, data.getDataByPropertyValue('location', "Honduras"));
    injectData(148, data.getDataByPropertyValue('location', "Netherlands"));
    injectData(149, data.getDataByPropertyValue('location', "Haiti"));
    injectData(150, data.getDataByPropertyValue('location', "Finland"));
    injectData(151, data.getDataByPropertyValue('location', "Fiji"));
    injectData(152, data.getDataByPropertyValue('location', "Phillipines"));
    injectData(153, data.getDataByPropertyValue('location', "Jordan"));
    injectData(154, data.getDataByPropertyValue('location', "Laos"));
    injectData(155, data.getDataByPropertyValue('location', "Lesotho"));
    injectData(156, data.getDataByPropertyValue('location', "Latvia"));
    injectData(157, data.getDataByPropertyValue('location', "Angola"));
    injectData(158, data.getDataByPropertyValue('location', "Andorra"));
    injectData(159, data.getDataByPropertyValue('location', "Antigua and Barbuda"));
    injectData(160, data.getDataByPropertyValue('location', "Italy"));
    injectData(161, data.getDataByPropertyValue('location', "Iran"));
    injectData(162, data.getDataByPropertyValue('location', "Iraq"));
    injectData(163, data.getDataByPropertyValue('location', "Israel"));
    injectData(164, data.getDataByPropertyValue('location', "Iceland"));
    injectData(165, data.getDataByPropertyValue('location', "Ukraine"));
    injectData(166, data.getDataByPropertyValue('location', "Uganda"));
    injectData(167, data.getDataByPropertyValue('location', "Uzbekistan"));
    injectData(168, data.getDataByPropertyValue('location', "Uruguay"));
    injectData(169, data.getDataByPropertyValue('location', "Armenia"));
    injectData(170, data.getDataByPropertyValue('location', "Saudi Arabia"));
    injectData(171, data.getDataByPropertyValue('location', "Germany"));
    injectData(172, data.getDataByPropertyValue('location', "Albania"));
    injectData(173, data.getDataByPropertyValue('location', "Algeria"));
    injectData(174, data.getDataByPropertyValue('location', "Azerbaijan"));
    injectData(175, data.getDataByPropertyValue('location', "Afghanistan"));
    injectData(176, data.getDataByPropertyValue('location', "Central African Republic"));
    injectData(177, data.getDataByPropertyValue('location', "South Africa"));
    injectData(178, data.getDataByPropertyValue('location', "Argentina"));
    injectData(179, data.getDataByPropertyValue('location', "Austria"));
    injectData(180, data.getDataByPropertyValue('location', "Oman"));
    injectData(181, data.getDataByPropertyValue('location', "Australia"));
    injectData(182, data.getDataByPropertyValue('location', "Ireland"));
    injectData(183, data.getDataByPropertyValue('location', "Ecuador"));
    injectData(184, data.getDataByPropertyValue('location', "Ethiopia"));
    injectData(185, data.getDataByPropertyValue('location', "United Arab Emirates"));
    injectData(186, data.getDataByPropertyValue('location', "Eritrea"));
    injectData(187, data.getDataByPropertyValue('location', "Egypt"));
    injectData(188, data.getDataByPropertyValue('location', "Estonia"));
    injectData(189, data.getDataByPropertyValue('location', "Spain"));
    injectData(190, data.getDataByPropertyValue('location', "Eswatini"));
    injectData(191, data.getDataByPropertyValue('location', "El Salvador"));
    injectData(192, data.getDataByPropertyValue('location', "India"));
    injectData(193, data.getDataByPropertyValue('location', "Indonesia"));
}

populateBtn.addEventListener('click', function () {
    const data = new Data(getData());
    populate(data);
});