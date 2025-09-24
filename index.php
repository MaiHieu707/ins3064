<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INS3064 - Full Adder Circuit Implementation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            border-bottom: 2px solid #007acc;
            padding-bottom: 10px;
        }
        h2 {
            color: #007acc;
            margin-top: 25px;
        }
        .circuit-info {
            background-color: #e8f4fd;
            padding: 15px;
            border-left: 4px solid #007acc;
            margin: 20px 0;
        }
        .truth-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        .truth-table th, .truth-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        .truth-table th {
            background-color: #007acc;
            color: white;
        }
        .truth-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .file-list {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            margin: 20px 0;
        }
        .file-list ul {
            margin: 0;
            padding-left: 20px;
        }
        .logic-formula {
            background-color: #fff3cd;
            padding: 10px;
            border-left: 4px solid #ffc107;
            font-family: 'Courier New', monospace;
            margin: 10px 0;
        }
        .download-section {
            background-color: #d4edda;
            padding: 15px;
            border-radius: 5px;
            margin: 20px 0;
        }
        .download-section a {
            color: #155724;
            text-decoration: none;
            font-weight: bold;
        }
        .download-section a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>INS3064 - Full Adder Circuit Implementation</h1>
        
        <div class="circuit-info">
            <strong>Project Overview:</strong> This project implements a digital full adder circuit for Proteus simulation software. The circuit performs binary addition with carry input and produces sum and carry outputs using standard logic gates.
        </div>

        <h2>Circuit Specifications</h2>
        <h3>Inputs</h3>
        <ul>
            <li><strong>A</strong> - First binary input</li>
            <li><strong>B</strong> - Second binary input</li>
            <li><strong>Ci</strong> - Carry input from previous stage</li>
        </ul>

        <h3>Outputs</h3>
        <ul>
            <li><strong>OF</strong> - Output Flag (Sum output)</li>
            <li><strong>CF</strong> - Carry Flag (Carry output)</li>
        </ul>

        <h3>Logic Gates Used</h3>
        <ul>
            <li>2 × XOR Gates (2-input each)</li>
            <li>2 × AND Gates (2-input each)</li>
            <li>1 × OR Gate (2-input)</li>
        </ul>

        <h2>Circuit Logic</h2>
        <div class="logic-formula">
            <strong>Sum (OF) =</strong> A ⊕ B ⊕ Ci<br>
            <strong>Carry (CF) =</strong> (A ∧ B) ∨ (Ci ∧ (A ⊕ B))
        </div>

        <h2>Truth Table</h2>
        <table class="truth-table">
            <thead>
                <tr>
                    <th>A</th>
                    <th>B</th>
                    <th>Ci</th>
                    <th>Sum (OF)</th>
                    <th>Carry (CF)</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
                <tr><td>0</td><td>0</td><td>1</td><td>1</td><td>0</td></tr>
                <tr><td>0</td><td>1</td><td>0</td><td>1</td><td>0</td></tr>
                <tr><td>0</td><td>1</td><td>1</td><td>0</td><td>1</td></tr>
                <tr><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td></tr>
                <tr><td>1</td><td>0</td><td>1</td><td>0</td><td>1</td></tr>
                <tr><td>1</td><td>1</td><td>0</td><td>0</td><td>1</td></tr>
                <tr><td>1</td><td>1</td><td>1</td><td>1</td><td>1</td></tr>
            </tbody>
        </table>

        <h2>Project Files</h2>
        <div class="file-list">
            <ul>
                <li><strong>full_adder_circuit.pdsprj</strong> - Main Proteus project file</li>
                <li><strong>full_adder_circuit.dsn</strong> - Circuit design file</li>
                <li><strong>README.md</strong> - Detailed documentation</li>
                <li><strong>circuit_simulation.py</strong> - Python simulation and verification script</li>
                <li><strong>index.php</strong> - This web interface</li>
            </ul>
        </div>

        <div class="download-section">
            <h3>Getting Started</h3>
            <ol>
                <li>Download the <a href="full_adder_circuit.pdsprj">Proteus project file</a></li>
                <li>Open Proteus ISIS (Intelligent Schematic Input System)</li>
                <li>Load the project file in Proteus</li>
                <li>Run the simulation to verify circuit operation</li>
                <li>Test with different input combinations from the truth table</li>
            </ol>
            
            <p><strong>Verification:</strong> Run <a href="circuit_simulation.py">circuit_simulation.py</a> to verify the logic implementation before using in Proteus.</p>
        </div>

        <h2>Circuit Implementation Notes</h2>
        <ul>
            <li>Logic Family: TTL (Transistor-Transistor Logic)</li>
            <li>Supply Voltage: 5V</li>
            <li>All gates are 2-input gates as specified</li>
            <li>Circuit verified against standard full adder truth table</li>
            <li>Suitable for educational and practical applications</li>
        </ul>

        <div class="circuit-info">
            <strong>Status:</strong> ✅ Circuit implementation completed and verified. Ready for Proteus simulation.
        </div>
    </div>
</body>
</html>