import 'package:flutter/material.dart';
import 'package:intl/intl.dart';
import 'package:labtrack_homepage/borrower.dart';
import 'package:labtrack_homepage/main.dart';

import 'requesting status.dart';

class BorrowerDashboard extends StatefulWidget {
  static const routeName = '/borrower-dashboard';

  @override
  State<BorrowerDashboard> createState() => _BorrowerDashboardState();
}

class _BorrowerDashboardState extends State<BorrowerDashboard> {
  void _navigateLoginFormState(BuildContext context) {
    Navigator.push(
      context,
      MaterialPageRoute(builder: (context) => LoginForm()),
    );
  }

  void _navigateRequestingStatusState(BuildContext context) {
    Navigator.push(
      context,
      MaterialPageRoute(builder: (context) => RequestingStatus()),
    );
  }
  void _navigateToBorrowerLoginForm(BuildContext context) {
    Navigator.push(
      context,
      MaterialPageRoute(builder: (context) => BorrowerLoginForm()),
    );
  }

  DateTime _currentDateTime = DateTime.now();
  TimeOfDay? _selectedTime;

  Future<void> _selectTime(BuildContext context) async {
    final TimeOfDay? picked = await showTimePicker(
      context: context,
      initialTime: TimeOfDay.now(),
    );
    if (picked != null && picked != _selectedTime) {
      setState(() {
        _selectedTime = picked;
      });
    }
  }

  @override
  Widget build(BuildContext context) {
    String formattedDateTime = DateFormat('dd/MM/yyyy hh:mm a').format(_currentDateTime);

    return Scaffold(
      appBar: AppBar(
        actions: [
          PopupMenuButton(
            itemBuilder: (BuildContext context) => [
              PopupMenuItem(
                child: ListTile(
                  leading: Icon(Icons.logout),
                  title: Text('Logout'),
                  onTap: () => _navigateToBorrowerLoginForm(context),
                ),
              ),
              PopupMenuItem(
                child: ListTile(
                  leading: Icon(Icons.person),
                  title: Text('Profile'),
                  onTap: () {
                    // Handle profile action
                  },
                ),
              ),
            ],
            icon: Icon(Icons.person),
          ),
        ],
      ),
      drawer: Drawer(
        child: ListView(
          children: [
            DrawerHeader(
              decoration: BoxDecoration(
                color: Colors.grey,
              ),
              child: Column(
                children: [
                  Image.asset(
                    'assets/bsu-logo.png',
                    height: 130,
                    width: 130,
                  ),
                ],
              ),
            ),
            ListTile(
              title: Text('Requesting'),
              leading: Icon(Icons.dashboard),
              onTap: () {
                // Handle dashboard navigation
              },
            ),
            ListTile(
              title: Text('Request Status'),
              leading: Icon(Icons.history),
              onTap: () => _navigateRequestingStatusState(context),
            ),
          ],
        ),
      ),
      body: Padding(
        padding: EdgeInsets.all(16),
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.start,
          children: [
            Text(
              'Requesting',
              style: TextStyle(
                fontSize: 24,
                fontWeight: FontWeight.bold,
              ),
            ),
            SizedBox(height: 20),
            Container(
              padding: EdgeInsets.all(16),
              decoration: BoxDecoration(
                borderRadius: BorderRadius.circular(10),
                border: Border.all(color: Colors.grey),
              ),
              child: Column(
                children: [
                  DropdownButtonFormField<String>(
                    decoration: InputDecoration(
                      labelText: 'Select laboratory resources',
                      prefixIcon: Icon(Icons.science),
                    ),
                    items: [],
                    onChanged: (value) {
                      // Handle dropdown value change
                    },
                  ),
                  SizedBox(height: 16),
                  TextFormField(
                    decoration: InputDecoration(
                      labelText: 'Date and Time',
                      prefixIcon: Icon(Icons.calendar_today),
                    ),
                    initialValue: formattedDateTime,
                    readOnly: true, // Set readOnly property to true
                  ),
                  SizedBox(height: 16),
                  DropdownButtonFormField<String>(
                    decoration: InputDecoration(
                      labelText: 'Select room',
                      prefixIcon: Icon(Icons.house),
                    ),
                    items: [],
                    onChanged: (value) {
                      // Handle dropdown value change
                    },
                  ),
                  SizedBox(height: 16),
                  GestureDetector(
                    onTap: () => _selectTime(context),
                    child: AbsorbPointer(
                      child: TextFormField(
                        decoration: InputDecoration(
                          labelText: 'Time limit',
                          prefixIcon: Icon(Icons.timer),
                        ),
                        initialValue: _selectedTime != null ? _selectedTime!.format(context) : '',
                        readOnly: true, // Set readOnly property to true
                      ),
                    ),
                  ),
                  SizedBox(height: 16),
                  ElevatedButton(
                    onPressed: () {
                      // Handle make request button press
                    },
                    child: Text('Make Request'),
                  ),
                ],
              ),
            ),
          ],
        ),
      ),
    );
  }
}
