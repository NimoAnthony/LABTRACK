import 'package:flutter/material.dart';
import 'package:labtrack_homepage/borrowerDashboard.dart';
import 'package:labtrack_homepage/main.dart';

class RequestingStatus extends StatelessWidget {
  static const routeName = '/status';

  void _navigateLoginFormState(BuildContext context) {
    Navigator.push(
      context,
      MaterialPageRoute(builder: (context) => LoginForm()),
    );
  }

  void _navigateBorrowerDashboardState(BuildContext context) {
    Navigator.push(
      context,
      MaterialPageRoute(builder: (context) => BorrowerDashboard()),
    );
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        actions: [
          PopupMenuButton(
            itemBuilder: (BuildContext context) => [
              PopupMenuItem(
                child: ListTile(
                  leading: Icon(Icons.logout),
                  title: Text('Logout'),
                  onTap: () => _navigateLoginFormState(context),
                  // Handle logout action
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
            icon: Icon(Icons.person), // Set the user icon here
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
              onTap: () => _navigateBorrowerDashboardState(context),
              // Handle dashboard navigation
            ),
            ListTile(
              title: Text('Request Status'),
              leading: Icon(Icons.history),
              onTap: () {
                // Handle history navigation
              },
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
            Row(
              children: [
                Expanded(
                  child: Container(
                    height: 35,
                    decoration: BoxDecoration(
                      color: Colors.white,
                      borderRadius: BorderRadius.circular(5),
                      border: Border.all(color: Colors.grey, width: 1),
                    ),
                    child: Row(
                      children: [
                        Padding(
                          padding: EdgeInsets.only(left: 8, right: 4),
                          child: Icon(Icons.search),
                        ),
                        Expanded(
                          child: TextField(
                            decoration: InputDecoration(
                              border: InputBorder.none,
                              hintText: 'Search...',
                            ),
                          ),
                        ),
                      ],
                    ),
                  ),
                ),
              ],
            ),
            SizedBox(height: 10),
            Container(
              width: 380,
              child: SingleChildScrollView(
                scrollDirection: Axis.horizontal,
                child: Card(
                  shape: RoundedRectangleBorder(
                    side: BorderSide(color: Colors.grey, width: 1),
                    borderRadius: BorderRadius.circular(10),
                  ),
                  child: DataTable(
                    dataRowColor: MaterialStateColor.resolveWith((states) => Colors.grey.shade200),
                    headingRowColor: MaterialStateColor.resolveWith((states) => Colors.grey.shade400),
                    dividerThickness: 1,
                    columns: [
                      DataColumn(label: Text('Requesting Date')),
                      DataColumn(label: Text('Name')),
                      DataColumn(label: Text('Room Assign')),
                      DataColumn(label: Text('Status')),
                      DataColumn(label: Text('Remarks')),
                    ],
                    rows: [
                      DataRow(
                        cells: [
                          DataCell(Text('July 19,2023 10:38:00 AM')),
                          DataCell(Text('Beaker-Tools')),
                          DataCell(Text('Room 306')),
                          DataCell(Text('Pending')),
                          DataCell(Text('Cancelled')),
                        ],
                      ),
                    ],
                  ),
                ),
              ),
            ),
          ],
        ),
      ),
    );
  }
}
