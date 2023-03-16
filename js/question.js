var counter = 2;
var end = 50;
var score = 0;
var question_no = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,""];
var question = ["0","1","To which settlement machinery can the central government refer the disputes under rule 81 - A?","Guiding and supervising the efforts of subordinates towards the attainment of the organizations goals describes the function of","Directing function of management embraces activities of","Adequate motivation of employees results in","'Unity of Command'principle of effective direction means","Establishing standards,comparing actual results with standards and taking Corrective actions are the steps included in the process of","Control function of management cannot be performed without","Who is known as the father of scientific management?","Who is known as the father of modern management?","Getting the things done from others is called as______","“Management is getting the things done by others” – is said by","Meaning of______is right to command","First step in planning is","Which statement is wrong?","Gantt chart represents","Which of the following is not a basic function of the management process?","Which is not a type of communication?","The five management functions of planning, organizing, commanding , coordinating and controlling were proposed by","Levels of Management are ","The Functions of Top level Management are","First step in Decision making is","Military type of organization","Project organization is a ______________organization structure","Managers at lower level can have……..span of control","Organization is a/an ………..system","In line organization, the authority flows from","____ is right to issue orders","Noise is the _______________ in communication","The authority that a _______ posses is known as line authority","In partnership, the partners have unlimited liability","Minimum ___________ and maximum ____ persons can be partners in a business","In a department the _______ is in charge of department","The advantages of project organization:","Industrial safety management if that branch of management which is concerned with ______ hazards from the industries","The following is indirect cost of accident","A safety programme consists of","9-Decibel (db) is a unit used to measure","The following is (are) used as safety device(s) in machines","Water is used to extinguish","_____ is best suited to extinguishing oil or flammable liquid fire","The following extinguisher is suitable for cotton or other textile fire","In which year did the industrial dispute act come into operation?","Before the industrial disputes act was implemented in the year 1947, which act took care of the industrial disputes?","The industrial peace is secured through voluntary _______ and compulsory ________","State true or false :Industrial disputes act can be described as the milestone in the historical development of industrial law in India","The Industrial dispute act was first amended in the year ______","The first suggestion for legislation in the act was made by a private member's bill called __________","The power is vested in the ____________ to make the act applicable to payment of wages to any class of persons employed in any establishment or class of establishments specified in section 2(h) by giving 3 month's notice to that effect","What is the maximum wage period for the payment of wages?","Your Score Is",""];
var options = [[],[],["Conciliation","Arbitration","Adjudicator","Supreme Court"],["planning","organizing","directing","controlling"],["supervising subordinates","guiding and teaching the subordinates","providing leadership and motivation to subordinates","all of these"],["fosteringin-disciplines among the subordinates","boosting the morale of the subordinates","decreasing the productivity of subordinates","all of these"],["subordinates should be responsible to one superior","there should be unity amongst subordinates","there should be unity amongst superiors","a superior can supervise limited number of subordinates"],["planning","controlling","directing","organizing"],["planning","organizing","staffing","motivation"],["Alfred Marshall","Mathew Boulton","F.W. Taylor","Henry Gantt"],["Max Weber","Henry Fayol","Mary Follet","Henry Gantt"],["Management","Adjustment","Organization","Direction"],["Henry Fayol","Drucker","Mery Parker","Fayoul"],["Authority","Stability","Scalar chain","Initiative"],["Establish goals","Identify resources","Prioritize goals","Establish tasks"],["Directing is one time activity","Directing should not be autocratic","Directing needs good vision in leadership","Directing needs communication and motivation as supportive functions"],["A critical activities in a project","Schedule of project","Predetermined duration and actual progress of activities","Details of design of a project"],["Controlling","Organizing","Working","Leading"],["Voice mails","Publications","Formal presentations","Listening"],["F.W. Taylor","Henry Ford","Chester Barnard","Henri Fayol"],["Strategic Level","Tactical Level","Operational Level","All of the Above"],["Defining goal of an organization or business.","Defining Mission and Vision","Making different long term policies for an organization","All of the Above"],["Recognize the problem","Evaluation","Analysis","Finding out alternatives"],["Line","Staff","Line and staff","Project"],["Temporary","Annual","Permanent","Quarterly"],["Low","Narrow","Narrow","High"],["Closed","Exposed","Open","None of the above"],["Subordinate to subordinate","Superior to Superior","Subordinate to Superior","Superior to subordinate"],["Responsibility","Span","Stability","Authority"],["Barrier","Transmitter","Both a and b","Medium"],["Subordinate","Manager","Superior","Chief Executives"],["True","False","Partly true","Partly false"],["4,20","2,20","4,10","2,10"],["Manager","H. R.","C.E.O.","Project Manager"],["It takes less time to complete","Maximum use of specialist knowledge","Decision are taken independently","None of the above"],["Reducing","Controlling","Eliminating","All of the above"],["Money paid for treatment of worker","Compensation paid to worker","Cost of lost time of injured worker","All of the above",""],["Three E’s","Four E’s","Five E’s","Six E’s"],["Light","Sound","Frequency","None of the above"],["Fail safe","Safety interlocks","Limit switches","All of the above"],["Class-A fires","Class-B fires","Class-C fires","All of the above"],["Soda acid","Vaporizing liquid","Foam","Dry chemical"],["Water","Soda acid","Foam","Dry chemicals"],["1947","1949","1953","1963"],["Trade Disputes Act, 1929","Royal Commission on Labour, 1934","Labour Management Relations Act, 1947","None of the above"],["Compromise and Arbitration","Adjudication and Arbitration","Work Committee and Industrial Tribunal","Negotiation and Adjudication"],["True","False","None","Wrong Statement"],["1929","1946","1947","1949"],["Legislative Bill","Wages Bill","Weekly Payment Bill","None of the above"],["Central Government","Acting Government","State Government","Judicial Court"],["1 month","40 days","45 days","60 days"],""];
var answers = [4,3,3,4,2,1,2,1,3,2,1,3,1,1,1,3,3,4,4,4,4,1,1,1,3,4,4,4,1,3,1,2,1,2,2,3,2,2,4,1,3,1,1,1,4,1,4,3,3,1,3,1];
var answer = [];

function next_one() {
    var val = getRadioVal( document.getElementById('radio_ans'), 'que' );
    answer.push(val);
    document.getElementById('butn').disabled = true;

    if (counter <= end) {
        if (question_no[counter] == 50) {
            document.getElementById('butn').innerText = "Finish";
        }
        document.getElementById("number").innerHTML = "Q." + question_no[counter];
        document.getElementById("question").innerHTML = question[counter];
        document.getElementById("ans_A").innerHTML = options[counter][0];
        document.getElementById("ans_B").innerHTML = options[counter][1];
        document.getElementById("ans_C").innerHTML = options[counter][2];
        document.getElementById("ans_D").innerHTML = options[counter][3];
        counter++;
    }
    else{
        for(var i=0;i<answers.length;i++){
            if(answer[i] == answers[i]){
                score++;
            } 
        }
        document.getElementById("number").innerHTML = "";
        document.getElementById("question").innerHTML = "your score is " + score + "/50";
        document.getElementById("ans_A").innerHTML = "";
        document.getElementById("ans_B").innerHTML = "";
        document.getElementById("ans_C").innerHTML = "";
        document.getElementById("ans_D").innerHTML = "";
        document.getElementById("ansa").style.visibility = "hidden";
        document.getElementById("ansb").style.visibility = "hidden";
        document.getElementById("ansc").style.visibility = "hidden";
        document.getElementById("ansd").style.visibility = "hidden";
        counter++;
        alert("your score is " + score + "/50");
        document.getElementById("ansd").style.visibility = "";
        location.href='home.php';
    }
}

function getRadioVal(form, name) {
    var val;
    var radios = form.elements[name];    
    for (var i=0, len=radios.length; i<len; i++) {
        if ( radios[i].checked ) {
            val = radios[i].value; 
            radios[i].checked = false; 
            break;
        }
    }
    return val;
}