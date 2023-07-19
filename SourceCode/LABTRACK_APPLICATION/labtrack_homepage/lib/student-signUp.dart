import 'package:flutter/material.dart';
import 'package:labtrack_homepage/borrower.dart';

class StudentSignUpForm extends StatefulWidget {
  const StudentSignUpForm({Key? key}) : super(key: key);

  @override
  _StudentSignUpFormState createState() => _StudentSignUpFormState();
}

class _StudentSignUpFormState extends State<StudentSignUpForm> {
  int _currentStep = 1;
  TextEditingController _firstNameController = TextEditingController();
  TextEditingController _middleNameController = TextEditingController();
  TextEditingController _lastNameController = TextEditingController();
  TextEditingController _contactNumberController = TextEditingController();
  String? _selectedGender;
  String? _selectedDepartment;
  String? _selectedYear;
  TextEditingController _sectionController = TextEditingController();
  TextEditingController _studentIDController = TextEditingController();
  TextEditingController _passwordController = TextEditingController();
  TextEditingController _confirmPasswordController = TextEditingController();
  bool _passwordsMatch = true;

  @override
  void dispose() {
    _firstNameController.dispose();
    _middleNameController.dispose();
    _lastNameController.dispose();
    _contactNumberController.dispose();
    _sectionController.dispose();
    _studentIDController.dispose();
    _passwordController.dispose();
    _confirmPasswordController.dispose();
    super.dispose();
  }

  void _checkPasswordMatch() {
    setState(() {
      _passwordsMatch = _passwordController.text == _confirmPasswordController.text;
    });
  }

  void _nextStep() {
    setState(() {
      _currentStep++;
    });
  }

  void _previousStep() {
    setState(() {
      _currentStep--;
    });
  }

  Widget _buildStepOne() {
    return Column(
      children: [
        TextField(
          controller: _firstNameController,
          decoration: InputDecoration(
            labelText: 'First Name',
            prefixIcon: Icon(Icons.person),
            border: OutlineInputBorder(
              borderRadius: BorderRadius.circular(10),
            ),
          ),
        ),
        SizedBox(height: 16),
        TextField(
          controller: _middleNameController,
          decoration: InputDecoration(
            labelText: 'Middle Name',
            prefixIcon: Icon(Icons.person),
            border: OutlineInputBorder(
              borderRadius: BorderRadius.circular(10),
            ),
          ),
        ),
        SizedBox(height: 16),
        TextField(
          controller: _lastNameController,
          decoration: InputDecoration(
            labelText: 'Last Name',
            prefixIcon: Icon(Icons.person),
            border: OutlineInputBorder(
              borderRadius: BorderRadius.circular(10),
            ),
          ),
        ),
        SizedBox(height: 16),
        TextField(
          controller: _contactNumberController,
          decoration: InputDecoration(
            labelText: 'Contact Number',
            prefixIcon: Icon(Icons.phone),
            border: OutlineInputBorder(
              borderRadius: BorderRadius.circular(10),
            ),
          ),
          keyboardType: TextInputType.phone,
        ),
        SizedBox(height: 16),
        Row(
          mainAxisAlignment: MainAxisAlignment.center,
          children: [
            if (_currentStep > 1)
              ElevatedButton(
                onPressed: _previousStep,
                child: Text('Previous'),
                style: ElevatedButton.styleFrom(
                  primary: Colors.green, // Change previous button color to green
                ),
              ),
            SizedBox(width: 16),
            ElevatedButton(
              onPressed: _nextStep,
              child: Text('Next'),
              style: ElevatedButton.styleFrom(
                primary: Colors.green, // Change next button color to green
              ),
            ),
          ],
        ),
      ],
    );
  }

  Widget _buildStepTwo() {
    return Column(
      children: [
        DropdownButtonFormField<String>(
          decoration: InputDecoration(
            labelText: 'Gender',
            prefixIcon: Icon(Icons.people),
            border: OutlineInputBorder(
              borderRadius: BorderRadius.circular(10),
            ),
          ),
          value: _selectedGender,
          items: ['Male', 'Female']
              .map((String value) => DropdownMenuItem<String>(
            value: value,
            child: Text(value),
          ))
              .toList(),
          onChanged: (String? newValue) {
            setState(() {
              _selectedGender = newValue;
            });
          },
        ),
        SizedBox(height: 16),
        DropdownButtonFormField<String>(
          decoration: InputDecoration(
            labelText: 'Department',
            prefixIcon: Icon(Icons.business),
            border: OutlineInputBorder(
              borderRadius: BorderRadius.circular(10),
            ),
          ),
          value: _selectedDepartment,
          items: ['BSIT', 'CICS']
              .map((String value) => DropdownMenuItem<String>(
            value: value,
            child: Text(value),
          ))
              .toList(),
          onChanged: (String? newValue) {
            setState(() {
              _selectedDepartment = newValue;
            });
          },
        ),
        SizedBox(height: 16),
        DropdownButtonFormField<String>(
          decoration: InputDecoration(
            labelText: 'Year',
            prefixIcon: Icon(Icons.calendar_today),
            border: OutlineInputBorder(
              borderRadius: BorderRadius.circular(10),
            ),
          ),
          value: _selectedYear,
          items: ['1st year', '2nd year', '3rd year', '4th year', '5th year']
              .map((String value) => DropdownMenuItem<String>(
            value: value,
            child: Text(value),
          ))
              .toList(),
          onChanged: (String? newValue) {
            setState(() {
              _selectedYear = newValue;
            });
          },
        ),
        SizedBox(height: 16),
        TextField(
          controller: _sectionController,
          decoration: InputDecoration(
            labelText: 'Section',
            prefixIcon: Icon(Icons.people),
            border: OutlineInputBorder(
              borderRadius: BorderRadius.circular(10),
            ),
          ),
        ),
        SizedBox(height: 16),
        Row(
          mainAxisAlignment: MainAxisAlignment.center,
          children: [
            if (_currentStep > 1)
              ElevatedButton(
                onPressed: _previousStep,
                child: Text('Previous'),
                style: ElevatedButton.styleFrom(
                  primary: Colors.green, // Change previous button color to green
                ),
              ),
            SizedBox(width: 16),
            ElevatedButton(
              onPressed: _nextStep,
              child: Text('Next'),
              style: ElevatedButton.styleFrom(
                primary: Colors.green, // Change next button color to green
              ),
            ),
          ],
        ),
      ],
    );
  }

  Widget _buildStepThree() {
    return Column(
      children: [
        TextField(
          controller: _studentIDController,
          decoration: InputDecoration(
            labelText: 'Student ID',
            prefixIcon: Icon(Icons.school),
            border: OutlineInputBorder(
              borderRadius: BorderRadius.circular(10),
            ),
          ),
        ),
        SizedBox(height: 16),
        TextField(
          controller: _passwordController,
          decoration: InputDecoration(
            labelText: 'Password',
            prefixIcon: Icon(Icons.lock),
            border: OutlineInputBorder(
              borderRadius: BorderRadius.circular(10),
            ),
          ),
          obscureText: true,
        ),
        SizedBox(height: 16),
        TextField(
          controller: _confirmPasswordController,
          decoration: InputDecoration(
            labelText: 'Confirm Password',
            prefixIcon: Icon(Icons.lock),
            errorText: !_passwordsMatch ? 'Password does not match' : null,
            border: OutlineInputBorder(
              borderRadius: BorderRadius.circular(10),
            ),
          ),
          obscureText: true,
          onChanged: (value) {
            _checkPasswordMatch();
          },
        ),
        SizedBox(height: 8),
        Row(
          mainAxisAlignment: MainAxisAlignment.center,
          children: [
            if (_currentStep > 1)
              ElevatedButton(
                onPressed: _previousStep,
                child: Text('Previous'),
                style: ElevatedButton.styleFrom(
                  primary: Colors.green, // Change previous button color to green
                ),
              ),
            SizedBox(width: 16),
            ElevatedButton(
              onPressed: _nextStep,
              child: Text('Next'),
              style: ElevatedButton.styleFrom(
                primary: Colors.green, // Change next button color to green
              ),
            ),
          ],
        ),
        SizedBox(height: 16),
        ElevatedButton(
          onPressed: () {
            // Perform sign-up logic here
          },
          child: Text('Sign Up'),
          style: ElevatedButton.styleFrom(
            primary: Colors.red, // Change sign up button color to green
            shape: RoundedRectangleBorder(
              borderRadius: BorderRadius.circular(10),
            ),
          ),
        ),
      ],
    );
  }

  Widget _buildStepCircle(int stepNumber) {
    bool isActive = _currentStep == stepNumber;
    Color circleColor = isActive ? Colors.green : Colors.grey;

    return Container(
      width: 60,
      height: 60,
      decoration: BoxDecoration(
        shape: BoxShape.circle,
        color: circleColor,
      ),
      child: Center(
        child: Text(
          stepNumber.toString(),
          style: TextStyle(
            color: Colors.white,
            fontWeight: FontWeight.bold,
            fontSize: 16,
          ),
        ),
      ),
    );
  }
  void _navigateToBorrowerLoginForm(BuildContext context) {
    Navigator.push(
      context,
      MaterialPageRoute(builder: (context) => BorrowerLoginForm()),
    );
  }

  @override
  Widget build(BuildContext context) {
    Widget currentStepContent;

    switch (_currentStep) {
      case 1:
        currentStepContent = _buildStepOne();
        break;
      case 2:
        currentStepContent = _buildStepTwo();
        break;
      case 3:
        currentStepContent = _buildStepThree();
        break;
      default:
        currentStepContent = SizedBox.shrink();
    }

    return Scaffold(
      resizeToAvoidBottomInset: true,
      appBar: AppBar(
        backgroundColor: Colors.white,
        elevation: 0,
        leading: IconButton(
          icon: Icon(Icons.arrow_back, color: Colors.black),
          onPressed: () => _navigateToBorrowerLoginForm(context), // Fix method name here
        ),
      ),
      body: Center(
        child: SingleChildScrollView(
          child: Container(
            width: 380,
            padding: EdgeInsets.all(16),
            child: Column(
              children: <Widget>[

                Row(
                  children: [
                    Image.asset(
                      'assets/bsu-logo.png', // Replace with your image location
                      height: 40,
                      width: 50,
                    ),
                    SizedBox(width: 10),
                    Text(
                      'Sign-Up as Student'
                          '',
                      style: TextStyle(
                        fontSize: 24,
                        fontWeight: FontWeight.bold,
                      ),
                    ),
                  ],
                ),
                SizedBox(height: 16),
                Row(
                  mainAxisAlignment: MainAxisAlignment.center,
                  children: [
                    _buildStepCircle(1),
                    SizedBox(width: 80),
                    _buildStepCircle(2),
                    SizedBox(width: 80),
                    _buildStepCircle(3),
                  ],
                ),
                SizedBox(height: 16),
                currentStepContent,
              ],
            ),
          ),
        ),
      ),
    );
  }
}
